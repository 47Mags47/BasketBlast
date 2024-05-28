<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'updated_at',
    ];

    protected $fillable = [
        'created_at',
        'body',
        'likes',
        'views',
        'title'
    ];
}

