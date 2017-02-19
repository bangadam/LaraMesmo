<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->integer('pembina_id')->unsigned();
            $table->integer('bidang_id')->unsigned();
            $table->string('status');
            $table->string('tgl_pel');
            $table->text('keterangan');
            $table->string('gambar');
            $table->timestamps();
        });

        Schema::table('kegiatans', function (Blueprint $table) {
            $table->foreign('bidang_id')->references('id')->on('bidangs');
            $table->foreign('pembina_id')->references('id')->on('pembina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kegiatans');
    }
}
