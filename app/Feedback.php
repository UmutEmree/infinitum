<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['text', 'name','title'];
    
    protected $table = 'feedback'; 

    public function feedback()
    {
        return $this->hasMany('App\Feedback', 'feedback_id', 'id');
    }

}
