<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =['nama_mk','dosen','jumlah_soal', 'keterangan'];
}
