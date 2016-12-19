<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('jenis_kelamin');
            $table->string('tgl_lahir');
            $table->integer('kelas_id')->unsigned();
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('gambar');
            $table->timestamps();
        });

        Schema::table('anggotas', function (Blueprint $table) {
            $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anggotas');
    }
}
