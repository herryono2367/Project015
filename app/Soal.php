<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable =['nama_mk','dosen','jumlah_soal', 'keterangan'];
}
