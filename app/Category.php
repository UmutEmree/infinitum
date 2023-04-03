<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug'];
    
        

         public function references()
    {
        return $this->hasMany('App\Reference', 'category_id', 'id');
    }

}
