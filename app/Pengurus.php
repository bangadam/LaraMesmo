<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'penguruses';

    protected $fillable = [
    	'anggota_id',
    	'jabatan'
    ];

    public function anggota() {
    	return $this->belongsTo('App\Anggota');
    }
}
