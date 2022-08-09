<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisbah', 
        'nama_bulan1', 
        'nama_bulan2', 
        'nama_bulan3', 
        'bunga_bulan1', 
        'bunga_bulan2', 
        'bunga_bulan3'
    ];
}