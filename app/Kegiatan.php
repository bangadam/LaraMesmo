<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';

    protected $fillable = [
    	'nama_kegiatan', 
    	'bidang_id',
    	'tgl_pel',
    	'pembina_id'
    ];

    public function pembina() {
    	return $this->belongsTo('App\Pembina');
    }

    public function bidang() {
    	return $this->belongsTo('App\Bidang');
    }
}

