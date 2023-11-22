<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';

    protected $fillable = [
        'sector',
        'number',
        'status',
        'type',	
        'habitant',
    ];

    protected $guarded = [
        // Add the guarded fields here
    ];
}


