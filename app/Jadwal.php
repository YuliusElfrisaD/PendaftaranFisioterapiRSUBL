<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['id', 'NO_RM', 'NAMA', 'ALAMAT', 'TGL_TERAPI', 'JAM_TERAPI'];
}
