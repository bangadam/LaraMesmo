<?php

use Illuminate\Database\Seeder;
use App\Pengurus;

class PengurusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengurus = new Pengurus;
        $pengurus->anggota_id = '1';
        $pengurus->jabatan = 'Ketua';
        $pengurus->save();

        $pengurus = new Pengurus;
        $pengurus->anggota_id = '2';
        $pengurus->jabatan = 'Wakil Ketua';
        $pengurus->save();

        $pengurus = new Pengurus;
        $pengurus->anggota_id = '3';
        $pengurus->jabatan = 'Bendahara 1';
        $pengurus->save();

        $pengurus = new Pengurus;
        $pengurus->anggota_id = '4';
        $pengurus->jabatan = 'Bendahara 2';
        $pengurus->save();

        $pengurus = new Pengurus;
        $pengurus->anggota_id = '5';
        $pengurus->jabatan = 'Sekretaris 1';
        $pengurus->save();

        $pengurus = new Pengurus;
        $pengurus->anggota_id = '6';
        $pengurus->jabatan = 'Sekretaris 2';
        $pengurus->save();

    }
}
