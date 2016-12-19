<?php

use Illuminate\Database\Seeder;
use App\Pembina;
class PembinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembina = new Pembina;
        $pembina->nama 		= 	'Eko';
        $pembina->email 	=	'Eko@mail.com';
        $pembina->jenis_kelamin = 'pria';
        $pembina->alamat = 'mojokerto';
        $pembina->no_hp = '0854854843';
        
        $pembina->save();

        $pembina = new Pembina;
        $pembina->nama 		= 	'Syhakur';
        $pembina->email 	=	'Syhakur@mail.com';
        $pembina->jenis_kelamin = 'pria';
        $pembina->alamat = 'mojokerto';
        $pembina->no_hp = '0854854843';
        
        $pembina->save();

        $pembina = new Pembina;
        $pembina->nama 		= 	'Nikma';
        $pembina->email 	=	'Nikma@mail.com';
        $pembina->jenis_kelamin = 'pria';
        $pembina->alamat = 'mojokerto';
        $pembina->no_hp = '0854854843';
        
        $pembina->save();

        $pembina = new Pembina;
        $pembina->nama 		= 	'Khoirul';
        $pembina->email 	=	'Khoirul@mail.com';
        $pembina->jenis_kelamin = 'pria';
        $pembina->alamat = 'mojokerto';
        $pembina->no_hp = '0854854843';
        
        $pembina->save();
    }
}
