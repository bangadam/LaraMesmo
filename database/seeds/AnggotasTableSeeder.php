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
<<<<<<< HEAD
<<<<<<< HEAD
            'kelas_id'      =>  '1',
=======
            'password'         =>  bcrypt('anggota'),
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
=======
            'password'         =>  bcrypt('anggota'),
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
	    	'jenis_kelamin'	=>	'pria',
	        'tgl_lahir'		=>	'1998-02-10',        
	    	'no_hp'			=>	'0857039348',
	        'alamat'		=>	'mojokerto',

	    ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'ilham',
            'email'         =>  'ilham@mail.com',
<<<<<<< HEAD
<<<<<<< HEAD
            'kelas_id'      =>  '1',
                
=======
            'password'         =>  bcrypt('anggota'), 
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
=======
            'password'         =>  bcrypt('anggota'), 
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
         
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',   
         ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'etika',
<<<<<<< HEAD
            'email'         =>  'etika@mail.com',
            'kelas_id'      =>  '1',
    

=======
            'email'         =>  'etika@mail.com', 
            'password'         =>  bcrypt('anggota'),
<<<<<<< HEAD
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
=======
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
            'jenis_kelamin' =>  'wanita',
            'tgl_lahir'     =>  '1998-02-10',
         
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',   
         ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'nadya',
            'email'         =>  'nadya@mail.com',
<<<<<<< HEAD
<<<<<<< HEAD
            'kelas_id'      =>  '1',
     
=======
            'password'         =>  bcrypt('anggota'), 
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
=======
            'password'         =>  bcrypt('anggota'), 
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
            'jenis_kelamin' =>  'wanita',
            'tgl_lahir'     =>  '1998-02-10',
          
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',   
         ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'erfan',
            'email'         =>  'erfan@mail.com',
<<<<<<< HEAD
<<<<<<< HEAD
            'kelas_id'     =>   '1',    
=======
            'password'         =>  bcrypt('anggota'), 
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
=======
            'password'         =>  bcrypt('anggota'), 
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
            'jenis_kelamin' =>  'pria',
            'tgl_lahir'     =>  '1998-02-10',
         
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',   
         ]);

        $anggota->save();

        $anggota = Anggota::create([
            'nama'          =>  'fiki',
            'email'         =>  'fiki@mail.com',
<<<<<<< HEAD
<<<<<<< HEAD
            'kelas_id'      =>  '1',
     
=======
            'password'         =>  bcrypt('anggota'), 
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
=======
            'password'         =>  bcrypt('anggota'), 
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
            'jenis_kelamin' =>  'wanita',
            'tgl_lahir'     =>  '1998-02-10',
         
            'no_hp'         =>  '0857039348',
            'alamat'        =>  'mojokerto',   
         ]);

        $anggota->save();
    }
}
