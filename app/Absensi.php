<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';

    protected $fillable = ['anggota_id', 'tgl_absen', 'keterangan'];

    public function anggota() {
    	return $this->belongsTo('App\Anggota');
    }
}
