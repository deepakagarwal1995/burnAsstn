<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'title',
        'fname',
        'mname',
        'lname',
        'specialty',
        'qualification',
        'institute',
        'country',
        'details',
        'email',
        'contact', 'status'
    ];
    use HasFactory;
}
