<?php

use Illuminate\Database\Seeder;
use App\Anggota;
class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anggota = Anggota::create([
	        'nama' 			=> 	'bangadam',
	        'email' 		=>	'bangadam@mail.com',
	    	'jenis_kelamin'	=>	'pria',
	        'tgl_lahir'		=>	'1998-02-10',
	    	'kelas_id'		=>	'1',          
	    	'tgl_lahir'		=>	'1998-02-10',
	    	'no_hp'			=>	'0857039348',
	        'alamat'		=>	'mojokerto',
	        'level'         =>  'anggota'
	    ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'ilham',
            'email'         =>  'ilham@mail.com', 
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '3',          
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'level'         =>  'anggota'   
         ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'etika',
            'email'         =>  'etika@mail.com', 
            'jenis_kelamin' =>  'wanita',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '5',          
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'level'         =>  'anggota'   
         ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'nadya',
            'email'         =>  'nadya@mail.com', 
            'jenis_kelamin' =>  'wanita',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '4',          
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'level'         =>  'anggota'   
         ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'erfan',
            'email'         =>  'erfan@mail.com', 
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '2',          
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'level'         =>  'anggota'   
         ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'fiki',
            'email'         =>  'fiki@mail.com', 
            'jenis_kelamin' =>  'wanita',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '9',          
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'level'         =>  'anggota'   
         ]);

        $anggota->save();
    }
}
