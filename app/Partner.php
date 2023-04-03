<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name','image'];
    
        protected $table = 'partners';

         public function partners()
    {
        return $this->hasMany('App\Partner', 'partner_id', 'id');
    }

}