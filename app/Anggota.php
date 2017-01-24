<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Anggota extends Model
{
    protected $table = 'anggotas';

    protected $fillable = [
    	'nama',
        'email',
    	'jenis_kelamin',
        'tgl_lahir',
    	'kelas_id',
    	'no_hp',
        'alamat',
        'gambar'
    ];

    public function kelas() {
        return $this->belongsTo('App\Kelas');
    }
}
