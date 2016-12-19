<?php

use Illuminate\Database\Seeder;
use App\Bidang;

class BidangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$bidang = new Bidang;
		$bidang->nama_bidang = 'IBDAK(Ibadah dan Dakwah)';
		$bidang->save();

		$bidang = new Bidang;
		$bidang->nama_bidang = 'PLATVENT(Pelatihan dan Event)';
		$bidang->save();

		$bidang = new Bidang;
		$bidang->nama_bidang = 'Keputrian';
		$bidang->save();
    }
}
