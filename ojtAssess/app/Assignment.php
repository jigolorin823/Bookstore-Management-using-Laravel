<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $guarded = ['id'];

    public function author()
   {
       return $this->belongsTo(Author::class);
   }
   public function book()
   {
       return $this->hasOne(Book::class);
   }
}
