<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{

    protected $table = 'pasien';

    protected $fillable = ['id', 'NAMA', 'TGL_LAHIR', 'UMUR', 'JENIS_KELAMIN', 'ALAMAT', 'NO_TELP'];
//    protected $primaryKey = 'NO_RM';
}
