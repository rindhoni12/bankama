<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direksi extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jabatan', 'pendidikan_terakhir', 'pekerjaan_terakhir','dasar_pengangkatan','photo'];
}
