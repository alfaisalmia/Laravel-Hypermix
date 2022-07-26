<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appsection extends Model
{
    use HasFactory;
    protected $fillable = ['video_url', 'android_url', 'ios_url'];
}
