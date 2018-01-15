<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopItem extends Model

{

    protected $fillable = [
    	'user_id', 
    	'top_category_id', 
    	'name',
    	'description',
    	'votes',
    ];

    public function top_category() 

    {

    	return $this->belongsTo('App/TopCategory');

    }

}
