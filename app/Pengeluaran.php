<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluarans';

    protected $fillable = ['jumlah_uang', 'keperluan', 'tgl_pengeluaran'];
}
