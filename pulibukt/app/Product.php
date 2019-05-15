<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
        'id'
    ];
    public function book()
   {
       return $this->belongsTo(Book::class);
   }
   public function orderline()
   {
       return $this->hasMany(Orderline::class);
   }
}
