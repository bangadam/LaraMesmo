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
            'password'      =>  bcrypt('anggota'),
	    	'jenis_kelamin'	=>	'pria',
	        'tgl_lahir'		=>	'1998-02-10',
	    	'kelas_id'		=>	'1',
	    	'tgl_lahir'		=>	'1998-02-10',
	    	'no_hp'			=>	'0857039348',
	        'alamat'		=>	'mojokerto',
	        'created_at'	=>	NULL,
	        'updated_at'	=>	NULL
        ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'ilham',
            'email'         =>  'ilham@mail.com',
            'password'      =>  bcrypt('anggota'), 
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '1',
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'created_at'    =>  NULL,
            'updated_at'    =>  NULL
        ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'etika',
            'email'         =>  'etika@mail.com',
            'password'      =>  bcrypt('anggota'), 
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '1',
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'created_at'    =>  NULL,
            'updated_at'    =>  NULL
        ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'nadya',
            'email'         =>  'nadya@mail.com',
            'password'      =>  bcrypt('anggota'), 
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '1',
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'created_at'    =>  NULL,
            'updated_at'    =>  NULL
        ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'erfan',
            'email'         =>  'erfan@mail.com',
            'password'      =>  bcrypt('anggota'), 
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '1',
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'created_at'    =>  NULL,
            'updated_at'    =>  NULL
        ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'fiki',
            'email'         =>  'fiki@mail.com', 
            'password'      =>  bcrypt('anggota'),
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '1',
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'created_at'    =>  NULL,
            'updated_at'    =>  NULL
        ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'anonim',
            'email'         =>  'anonim@mail.com', 
            'password'      =>  bcrypt('anggota'),
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '1',
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'created_at'    =>  NULL,
            'updated_at'    =>  NULL
        ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'hacker',
            'email'         =>  'hacker@mail.com',
            'password'      =>  bcrypt('anggota'), 
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
            'kelas_id'      =>  '1',
            'tgl_lahir'     =>  '1998-02-10',
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',
            'created_at'    =>  NULL,
            'updated_at'    =>  NULL
        ]);

        $anggota->save();
    }
}
