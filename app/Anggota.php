<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';

    protected $fillable = [
    	'nama',
        'email', 
    	'jenis_kelamin',
        'tgl_lahir',
    	'jurusan',
    	'tgl_lahir',
    	'no_hp',
        'alamat',
        'gambar'
    ];

    public function pengurus() {
    	return $this->hasOne('App\Pengurus');
    }
}
