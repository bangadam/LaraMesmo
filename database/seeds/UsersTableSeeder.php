<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::create([
        	'username'	=>	'admin',
        	'password'	=>	bcrypt('admin'),
        	'level'		=>	'admin'
        ]);
        $users->save();

        $users = User::create([
            'username'  =>  'pembina',
            'password'  =>  bcrypt('pembina'),
            'level'     =>  'pembina'
        ]);
        $users->save();

        $users = User::create([
            'username'  =>  'anggota',
            'password'  =>  bcrypt('anggota'),
            'level'     =>  'anggota'
        ]);
        $users->save();
    }
}
