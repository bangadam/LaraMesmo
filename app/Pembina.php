<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    protected $table = "pembina";

    protected $fillable = [
    	'nama', 'jenis_kelamin', 'alamat', 'no_hp'
    ];

    protected $hidden = [
    	'password'
    ];
}
