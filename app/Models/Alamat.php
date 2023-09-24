<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = ['nama_cabang', 'alamat', 'no_telp', 'no_hp', 'flag'];
}
