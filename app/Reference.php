<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{

	protected $table = 'references';
    
         protected $fillable = ['name','slug','category_id','image','text','image2','link','home','image3'];

         public function categories()
    {
        return $this->belongsTo('App\Category', 'category_id', 'slug');
    }

}
