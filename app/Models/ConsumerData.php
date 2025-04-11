<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumerData extends Model
{
    // use HasFactory;

    protected $fillable = [
        'name',
        'nik',
        'dob',
        'marriage_status',
    ];

}
