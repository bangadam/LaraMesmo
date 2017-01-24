<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'keuangans';

    protected $fillable = ['jumlah_uang', 'pemasukan_dari', 'tgl_masuk'];
}
