<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produklayanan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produklayanan', 'foto_thumbnail', 'deskripsi', 'jenis_tabungan', 'jenis_produk'];
}
