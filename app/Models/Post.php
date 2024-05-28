<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'updated_at',
        'creator_id', 
    ];

    protected $fillable = [
        'created_at',
        'body',
        'likes',
        'views'
    ];

    public function creator(){
        return $this->belongsTo(User::class);
    }
}
