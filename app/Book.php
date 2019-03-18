<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Each book belongs to a user
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * a book has many ratings
     */
    public function ratings(){
        return $this->hasMany(Rating::class);
    }
    
}
