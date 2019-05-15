<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'isbn', 'publisher', 'publish_date', 'description',  'image', 'author_id', 'genre_id'
    ];
    public function author()
   {
       return $this->belongsTo(Author::class);
   }
   public function genre()
   {
       return $this->belongsTo(Genre::class);
   }
   public function product()
    {
        return $this->hasOne(Product::class);
    }
}
