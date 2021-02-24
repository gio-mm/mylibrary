<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsToMany(User::class,'favorite_books');
    }
    public function book(){

        return $this->hasMany(FavoriteBook::class);
    }
}
