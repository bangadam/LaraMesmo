<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anggota_id')->unsigned();
            $table->date('tgl_absen');
            $table->timeTz('jam_absen');
            $table->string('keterangan');
            $table->timestamps();
        });

        Schema::table('absensis', function (Blueprint $table) {
            $table->foreign('anggota_id')->references('id')->on('anggotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('absensis');
    }
}
