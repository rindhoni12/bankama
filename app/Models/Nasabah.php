<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'no_hp', 'agama', 'jenis_kelamin','nama_gadis_ibu', 'foto_ktp'];
}
