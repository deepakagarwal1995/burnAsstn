<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'phone',
        'subject',
        'type',
        'messg'
    ];
    use HasFactory;
}
