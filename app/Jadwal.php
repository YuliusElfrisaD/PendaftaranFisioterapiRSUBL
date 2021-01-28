<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['no', 'id', 'NAMA', 'ALAMAT', 'TGL_TERAPI', 'JAM_TERAPI'];
    protected $primaryKey = "no";
}
