<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembiayaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_produk',
        'nama', 
        'tempat_lahir', 
        'tgl_lahir', 
        'alamat_domisili',
        'kebutuhan_dana',
        'jangka_waktu',
        'agunan',
        'no_hp', 
        'nik', 
        'foto_ktp'
    ];
}
