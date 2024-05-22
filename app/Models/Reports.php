<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $fillable = [
        'title', 'sdescr',
        'date',
        'image',
        'status', 'thumbnail'
    ];
    use HasFactory;
}
