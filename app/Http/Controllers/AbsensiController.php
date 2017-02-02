<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anggota;
use App\Absensi; 
use Excel;
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AbsensiController extends Controller
{
    public function index() {
    	$data = Absensi::orderBy('tgl_absen', 'desc')->get();

    	return view('admin.absensi.index', ['data' => $data]);
    }

    public function getTambahAbsensi(Request $request) {
    	$data = Anggota::all();
    	return view('admin.absensi.tambah', ['data' => $data]);
    }

    public function getEditAbsensi($id) {
        $data = Absensi::findOrFail($id);

        if (!$data) {
            abort(404);
        }
    	return view('admin.absensi.edit', ['data' => $data]);
    }

    public function getHapusAbsensi($id) {
    	$data = Absensi::find($id);
        $data->delete();

        return redirect()->route('absensi')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data pembina
    public function postTambahAbsensi(Request $request) {
        $dataAbsen = $request['keterangan'];

        foreach ($dataAbsen as $key => $value) {
            $tgl_absen = $request['tgl_absen'];
            $jam_absen = $request['jam_absen'];

            $absensi = new Absensi;
            $absensi->anggota_id = $key;
            $absensi->tgl_absen = $tgl_absen;
            $absensi->keterangan = $value;
            $absensi->jam_absen = $jam_absen;
            $absensi->save();
        }
        
        return redirect()->route('absensi')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function putEditAbsensi(Request $request, $id) { 

        $this->validate($request, [
            'tgl_absen'         =>  'required',
        ]);

        $absensi = Absensi::findOrFail($id);
        $absensi->tgl_absen          =   $request['tgl_absen'];
        $absensi->keterangan         =   $request['keterangan'];

        $absensi->save();

        return redirect()->route('absensi')->with('pesan', 'Data berhasil di Update !');
    }

    public function downloadExcel($type) {
        $data = Absensi::select(['anggota_id', 'tgl_absen', 'keterangan'])->get()->toArray();
        return Excel::create('dataAbsensiExcel', function($excel) use ($data) {
            $excel->sheet('dataAbsensiExcel', function($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $request) {
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function($render) {
                Absensi::insert($render->toArray());
            });

            if (!$data) {
                return back()->with('pesan', 'Data Gagal Di Import !');
            }
        }

        return back()->with('pesan', 'Data Berhasil Di Import !');
    }

    public function printPdf(Request $request) {
       // ambil semua data
    $data = Absensi::all();
    // mengarahkan view pada file pdf.blade.php di views/data/
    $pdf = PDF::loadView('admin.absensi.pdf',compact('data'));

        return $pdf->stream('dataAbsensi');
    }
}
