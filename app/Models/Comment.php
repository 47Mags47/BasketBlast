<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'updated_at',
        'is_image',
        'paper_id'
    ];

    protected $fillable = [
        'like',
        'view',
        'created_at',
        'body',
    ];

    public function sender(){
        return $this->belongsTo(User::class);
    }

    public function paper(){
        return $this->belongsTo(Paper::class);
    }
}
