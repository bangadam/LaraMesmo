<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anggota;
use App\Absensi; 
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AbsensiController extends Controller
{
    public function index() {
    	$data = Absensi::all();

    	return view('admin.absensi.index', ['data' => $data]);
    }

    public function getTambahAbsensi() {
    	$data = Anggota::all();
    	return view('admin.absensi.tambah', ['data' => $data]);
    }

    public function getEdit($id) {
        $data = Pembina::findOrFail($id);
        if (!$data) {
            abort(404);
        }
    	return view('admin.pembina.edit', ['data' => $data]);
    }

    public function getLihat($id) {
        $data = Pembina::findOrFail($id);
    	return view('admin.pembina.lihat', ['data' => $data]);
    }

    public function getHapus($id) {
    	$data = Pembina::find($id);
        $data->delete();

        return redirect()->route('pembina')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data pembina
    public function postTambahAbsensi(Request $request) {
        
        // $this->validate($request, [
        //     'nama'              =>  'required|min:3',
        //     'email'             =>  'required|email|unique:pembina',
        //     'jenis_kelamin'     =>  'required',
        //     'no_hp'             =>  'required|max:13',
        //     'pcntl_alarm(seconds)at'            =>  'required',
        //     'gambar'            =>  'image'
        // ]);
        $anggota = Anggota::all();
        $absensi = new Absensi;

       	dd($anggota->id->get());
       
        
        return redirect()->route('pembina')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function putEdit(Request $request, $id) { 

        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'email'             =>  'required|email',
            'jenis_kelamin'     =>  'required',
            'no_hp'             =>  'required|max:13',
            'alamat'            =>  'required',
            'gambar'            =>  'image'
        ]);

        $pembina = Pembina::findOrFail($id);
        $pembina->nama          =   $request['nama'];
        $pembina->email         =   $request['email'];
        $pembina->jenis_kelamin =   $request['jenis_kelamin'];
        $pembina->no_hp         =   $request['no_hp'];
        $pembina->alamat        =   $request['alamat'];

           // upload gambar
        if ($request->hasFile('gambar')) {
            $file       =   $request->file('gambar');
            $fileName   =   date('Y-m-d') . "." . $file->getClientOriginalName();
            $location   =   public_path('uploads/'. $fileName);
            Image::make($file)->resize(800, 400)->save($location);
            //gambar lama    
            $oldFileName = $pembina->gambar;
            //gambar baru
            $pembina->gambar = $fileName;
            //hapus gambar lama
            Storage::delete($oldFileName);    

        }

        $pembina->save();

        return redirect()->route('pembina')->with('pesan', 'Data berhasil di Update !');
    }

    public function downloadExcel($type) {
        $data = Pembina::get()->toArray();
        return Excel::create('dataPembinaExcel', function($excel) use ($data) {
            $excel->sheet('dataPembinaExcel', function($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $request) {
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function($render) {
                Pembina::insert($render->toArray());
            });

            if (!$data) {
                return back()->with('pesan', 'Data Gagal Di Import !');
            }
        }

        return back()->with('pesan', 'Data Berhasil Di Import !');
    }

    public function printPdf(Request $request) {
       // ambil semua data
    $data = Pembina::all();
    // mengarahkan view pada file pdf.blade.php di views/data/
    $pdf = PDF::loadView('admin.pembina.pdf',compact('data'));

        return $pdf->stream('dataPembina');
    }
}
