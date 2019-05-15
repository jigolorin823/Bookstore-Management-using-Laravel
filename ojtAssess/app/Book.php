<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = ['id'];

   public function assignment()
   {
       return $this->hasMany(Assignment::class);
   }
   public function assignmentsCountRelation()
    {
        return $this->hasMany(Assignment::class)->selectRaw('assignment_id, count(*) as count')->groupBy('assignment_id')->orderBy('assignment_id');
    }
    public function getAssignmentsCountAttribute()
    {
        return $this->assignmentsCountRelation->first()?$this->assignmentsCountRelation->first()->count:0;
    }
}
