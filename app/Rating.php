<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /**
     * A rating belongs to a book
     */
    public function book(){
        return $this.belongsTo(Book::class);
    }
}
