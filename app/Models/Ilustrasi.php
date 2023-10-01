<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ilustrasi extends Model
{
    use HasFactory;

    protected $fillable = ['banner', 'posisi'];
}