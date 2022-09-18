<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_produk',
        'nama', 
        'tempat_lahir', 
        'tgl_lahir', 
        'alamat_domisili', 
        'no_hp', 
        'nik', 
        'foto_ktp'
    ];
}
