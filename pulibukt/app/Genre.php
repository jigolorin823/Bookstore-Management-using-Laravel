<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = ['id'];

    public function book()
   {
       return $this->hasMany(Book::class);
   }
}
