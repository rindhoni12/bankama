<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerMobile extends Model
{
    use HasFactory;

    protected $fillable = ['no_slide', 'banner'];
}
