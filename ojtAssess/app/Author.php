<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = ['id'];
    public function assignment()
   {
       return $this->hasMany(Assignment::class);
   }
}
