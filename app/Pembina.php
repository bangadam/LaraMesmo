<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    protected $table = "pembina";

    protected $fillable = [
    	'nama', 'email', 'jenis_kelamin', 'alamat', 'tgl_lahir', 'no_hp', 'gambar'
    ];

}
