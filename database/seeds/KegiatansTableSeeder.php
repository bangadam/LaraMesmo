<?php

use Illuminate\Database\Seeder;
use App\Kegiatan;

class KegiatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Kegiatan;
        $data->nama_kegiatan = 'Puasa Ramadhan';
        $data->pembina_id = '1';
        $data->bidang_id = '2';
        $data->status = 'terlaksana';
        $data->tgl_pel = '20 January, 2017';
        $data->save();

        $data = new Kegiatan;
        $data->nama_kegiatan = 'Bakti Sosial';
        $data->pembina_id = '3';
        $data->bidang_id = '1';
        $data->status = 'belum terlaksana';
        $data->tgl_pel = '20 Oktober, 2017';
        $data->save();

        $data = new Kegiatan;
        $data->nama_kegiatan = 'Pengajian';
        $data->pembina_id = '1';
        $data->bidang_id = '3';
        $data->status = 'terlaksana';
        $data->tgl_pel = '10 February, 2017';
        $data->save();
    }
}
