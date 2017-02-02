<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Kelas;
use App\Pengurus;
use Excel;
use PDF;
use Image;
use Storage;
use App\Http\Requests;



class AnggotaController extends Controller
{
    //menampilkan daftar anggota
   	public function getAnggota() {
        $data = Anggota::all();
    	return view('admin.anggota.index', ['data' => $data]);
    }

    public function getTambah() {
        $kelas = Kelas::all();
    	return view('admin.anggota.tambah', ['kelas' => $kelas]);
    }

    public function getEdit($id) {
        $data       = Anggota::findOrFail($id);
        $kelas      = Kelas::all();

        if (!$data) {
            abort(404);
        }
    	return view('admin.anggota.edit', ['data' => $data, 'kelas' => $kelas]);
    }

    public function getLihat($id) {
        $data = Anggota::findOrFail($id);
    	return view('admin.anggota.lihat', ['data' => $data]);
    }

    public function getHapus($id) {
    	$data = Anggota::findOrFail($id);
        if (!$data) {
            abort(404);
        }
        $data->delete();

        return redirect()->route('anggota')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data anggota
    public function postTambah(Request $request) {
        // dd($request);
        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'email'             =>  'required|email|unique:anggotas',
            'jenis_kelamin'     =>  'required',
            'tgl_lahir'         =>  'required',
            'kelas_id'          =>  'required',
            'no_hp'             =>  'required|min:11|max:13',
            'alamat'            =>  'required',
            'gambar'            =>  'image'
        ]);

        $anggota = new Anggota;
        $anggota->nama          =   $request['nama'];
        $anggota->email         =   $request['email'];
        $anggota->jenis_kelamin =   $request['jenis_kelamin'];
        $anggota->tgl_lahir     =   $request['tgl_lahir'];
        $anggota->kelas_id      =   $request['kelas_id'];
        $anggota->no_hp         =   $request['no_hp'];
        $anggota->alamat        =   $request['alamat'];
           // upload gambar
        if ($request->hasFile('gambar')) {
            $file       =   $request->file('gambar');
            $fileName   =   date('Y-m-d') . "." . $file->getClientOriginalName();
            $location   =   public_path('uploads/'. $fileName);
            Image::make($file)->resize(800, 400)->save($location);

            $anggota->gambar  =  $fileName;
        }

        $anggota->save();

        return redirect()->route('anggota')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function putEdit(Request $request, $id) { 

        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'email'             =>  'required',
            'jenis_kelamin'     =>  'required',
            'tgl_lahir'         =>  'required',
            'kelas_id'          =>  'required',
            'no_hp'             =>  'required|max:13|min:12',
            'alamat'            =>  'required',
            'gambar'            =>  'image'
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->nama          =   $request['nama'];
        $anggota->email         =   $request['email'];
        $anggota->jenis_kelamin =   $request['jenis_kelamin'];
        $anggota->tgl_lahir     =   $request['tgl_lahir'];
        $anggota->kelas_id      =   $request['kelas_id'];
        $anggota->no_hp         =   $request['no_hp'];
        $anggota->alamat        =   $request['alamat'];

           // upload gambar
        if ($request->hasFile('gambar')) {
            $file       =   $request->file('gambar');
            $fileName   =   date('Y-m-d') . "." . $file->getClientOriginalName();
            $location   =   public_path('uploads/'. $fileName);
            Image::make($file)->resize(800, 400)->save($location);
            //gambar lama    
            $oldFileName = $anggota->gambar;
            //gambar baru
            $anggota->gambar = $fileName;
            //hapus gambar lama
            Storage::delete($oldFileName);    

        }

        $anggota->save();

        return redirect()->route('anggota')->with('pesan', 'Data berhasil di Update !');
    }

    public function downloadExcel($type) {
        $data = Anggota::select(['id', 'nama', 'kelas_id', 'jenis_kelamin', 'tgl_lahir', 'no_hp', 'alamat'])->get()->toArray();
        return Excel::create('dataAnggotaExcel', function($excel) use ($data) {
            $excel->sheet('dataAnggotaExcel', function($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $request) {
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function($render) {
                Anggota::insert($render->toArray());
            });

            if (!$data) {
                return back()->with('pesan', 'Data Gagal Di Import !');
            }
        }

        return back()->with('pesan', 'Data Berhasil Di Import !');
    }

    public function printPdf(Request $request) {
       // ambil semua data
    $data = Anggota::select(['id', 'nama', 'kelas_id', 'jenis_kelamin', 'tgl_lahir', 'no_hp', 'alamat'])->get();
    // mengarahkan view pada file pdf.blade.php di views/data/
    $pdf = PDF::loadView('admin.anggota.pdf',compact('data'));

        return $pdf->stream('dataAnggota');
    }
}
