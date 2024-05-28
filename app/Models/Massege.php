<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massege extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'updated_at',
        'sender_id',
        'recipient_id',
        'is_image'
    ];

    protected $fillable = [
        'created_at',
        'massege',
    ];

    public function sender(){
        return $this->belongsTo(User::class);
    }

    public function recipient(){
        return $this->belongsTo(User::class);
    } 
}
