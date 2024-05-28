<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notisication extends Model
{
    use HasFactory;
    
    protected $guarded = [
       'updated_at',
    ];

    protected $fillable = [
       'id',
       'created_at',
       'massege',
       'recipient_id'
    ];

    public function recipient(){
      return $this->belongsTo(User::class);
    }
}
