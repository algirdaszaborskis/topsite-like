<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopCategory extends Model

{

	protected $fillable = [
		'name',
		'description',
		'user_id',
	];

	public function top_items()
	{

		return $this->hasMany('App\TopItem');

	}
}
