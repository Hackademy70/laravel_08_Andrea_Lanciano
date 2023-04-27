<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movieTitle',
        'movieDescription',
        'movieDuration',
        'genre',
        'pegi',
    ];

    public function user(){
        return $this->belongTo(User::class);
    }
}
