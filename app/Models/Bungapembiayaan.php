<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bungapembiayaan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pembiayaan', 'presentase_bunga'];
}
