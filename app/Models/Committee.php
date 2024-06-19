<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $fillable = [
        'name',
        'position',
        'image',
        'fb',
        'insta',
        'twitt',
        'descr',
        'type'
    ];
    use HasFactory;
}
