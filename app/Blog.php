<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['name', 'slug','image','text'];
    
    protected $table = 'blog'; 

    public function blog()
    {
        return $this->hasMany('App\Blog', 'blog_id', 'id');
    }

}
