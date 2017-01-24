<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keuangan;
use App\Pemasukan;
use App\Pengeluaran;
use Image;
use DB;
use Storage;
use Excel;
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KeuanganController extends Controller
{
    public function index() {
        $pemasukan = Pemasukan::orderBy('created_at', 'desc')->first();
        $pengeluaran = Pengeluaran::orderBy('created_at', 'desc')->first();
        
        $total1 = Pemasukan::select('jumlah_uang')->sum('jumlah_uang');
        $total2 = Pengeluaran::select('jumlah_uang')->sum('jumlah_uang');
        $hasil   =     $total1-$total2;

    	return view('admin.keuangan.index', [
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran,
            'total1'    =>  $total1,
            'total2'    =>  $total2,
            'hasil'     =>  $hasil
        ]);
    }

    // Pemasukan
    public function pemasukan() {
        $data = Pemasukan::all();
        return view('admin.keuangan.pemasukan.index', ['data' => $data]);
    }

     public function getTambahPemasukan() {
    	return view('admin.keuangan.pemasukan.tambah');
    }

    public function getEditPemasukan($id) {
        $data = Pemasukan::findOrFail($id);
        if (!$data) {
            abort(404);
        }
    	return view('admin.keuangan.pemasukan.edit', ['data' => $data]);
    }

    public function getHapusPemasukan($id) {
    	$data = Pemasukan::findOrFail($id);
        
        if (!$data) {
            abort(404);
        }
        
        $data->delete();

        return redirect()->route('pemasukan')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data pembina
    public function postTambahPemasukan(Request $request) {
        
        $this->validate($request, [
            'jumlah_uang'       =>  'required',
            'pemasukan_dari'    =>  'required',
            'tgl_masuk'         =>  'required'
        ]);

        $keuangan = new Pemasukan;
        $keuangan->jumlah_uang      =   $request['jumlah_uang'];
        $keuangan->pemasukan_dari   =   $request['pemasukan_dari'];
        $keuangan->tgl_pemasukan       =   $request['tgl_masuk'];

        $keuangan->save();
        
        return redirect()->route('pemasukan')->with('pesan', 'Data Berhasil Di Tambahkan'); 
    }

    public function putEditPemasukan(Request $request, $id) { 
        
        $this->validate($request, [
            'jumlah_uang'       =>  'required',
            'pemasukan_dari'    =>  'required',
            'tgl_pemasukan'         =>  'required'
        ]);

        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->jumlah_uang      =   $request['jumlah_uang'];
        $pemasukan->pemasukan_dari   =   $request['pemasukan_dari'];
        $pemasukan->tgl_pemasukan        =   $request['tgl_pemasukan'];

        $pemasukan->save();

        return redirect()->route('pemasukan')->with('pesan', 'Data berhasil di Update !');
    }

    public function downloadExcel($type) {
        $data = Pemasukan::get()->toArray();
        return Excel::create('dataKeuanganMasukExcel', function($excel) use ($data) {
            $excel->sheet('dataKeuanganMasukExcel', function($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $request) {
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function($render) {
                Pemasukan::insert($render->toArray());
            });

            if (!$data) {
                return back()->with('pesan', 'Data Gagal Di Import !');
            }
        }

        return back()->with('pesan', 'Data Berhasil Di Import !');
    }

    public function printPdf(Request $request) {
       // ambil semua data
    $data = Pemasukan::all();
    // mengarahkan view pada file pdf.blade.php di views/data/
    $pdf = PDF::loadView('admin.keuangan.pemasukan.pdf',compact('data'));

        return $pdf->stream('dataKeuanganMasuk');
    }

    // Pengeluaran
    public function Pengeluaran() {
        $data = Pengeluaran::all();
        return view('admin.keuangan.pengeluaran.index', ['data' => $data]);
    }

     public function getTambahPengeluaran() {
        return view('admin.keuangan.pengeluaran.tambah');
    }

    public function getEditPengeluaran($id) {
        $data = Pengeluaran::findOrFail($id);
        if (!$data) {
            abort(404);
        }
        return view('admin.keuangan.pengeluaran.edit', ['data' => $data]);
    }

    public function getHapusPengeluaran($id) {
        $data = Pengeluaran::findOrFail($id);
        
        if (!$data) {
            abort(404);
        }

        $data->delete();

        return redirect()->route('pengeluaran')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data pembina
    public function postTambahPengeluaran(Request $request) {
        
        $this->validate($request, [
            'jumlah_uang'       =>  'required',
            'keperluan'    =>  'required',
            'tgl_pengeluaran'         =>  'required'
        ]);

        $keuangan = new Pengeluaran;
        $keuangan->jumlah_uang      =   $request['jumlah_uang'];
        $keuangan->keperluan   =   $request['keperluan'];
        $keuangan->tgl_pengeluaran       =   $request['tgl_pengeluaran'];

        $keuangan->save();
        
        return redirect()->route('pengeluaran')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function putEditPengeluaran(Request $request, $id) { 
        
        $this->validate($request, [
            'jumlah_uang'       =>  'required',
            'keperluan'    =>  'required',
            'tgl_pengeluaran'         =>  'required'
        ]);

        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->jumlah_uang      =   $request['jumlah_uang'];
        $pengeluaran->keperluan   =   $request['keperluan'];
        $pengeluaran->tgl_pengeluaran       =   $request['tgl_pengeluaran'];

        $pengeluaran->save();

        return redirect()->route('pengeluaran')->with('pesan', 'Data berhasil di Update !');
    }

    public function PengeluaranDownloadExcel($type) {
        $data = Pengeluaran::get()->toArray();
        return Excel::create('dataKeuanganKeluarExcel', function($excel) use ($data) {
            $excel->sheet('dataKeuanganKeluarExcel', function($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function PengeluaranImportExcel(Request $request) {
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path, function($render) {
                Pengeluaran::insert($render->toArray());
            });

            if (!$data) {
                return back()->with('pesan', 'Data Gagal Di Import !');
            }
        }

        return back()->with('pesan', 'Data Berhasil Di Import !');
    }

    public function PengeluaranPrintPdf(Request $request) {
       // ambil semua data
        $data = Pengeluaran::all();
        // mengarahkan view pada file pdf.blade.php di views/data/
        $pdf = PDF::loadView('admin.keuangan.pengeluaran.pdf',compact('data'));

        return $pdf->stream('dataKeuanganKeluar');
    }
}
