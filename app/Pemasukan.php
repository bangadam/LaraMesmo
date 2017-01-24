<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $table = 'pemasukans';

    protected $fillable = ['jumlah_uang', 'pemasukan_dari', 'tgl_pemasukan'];
}
