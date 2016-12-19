<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(KelasesTableSeeder::class);
        $this->call(AnggotasTableSeeder::class);
        $this->call(PembinaTableSeeder::class);
        $this->call(PengurusesTableSeeder::class);
        $this->call(BidangsTableSeeder::class);
    }
}
