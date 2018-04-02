<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $fillable = [
		'name',
		'land_area',
		'classification',
		'physical_desc',
	];

	public function municipality(){
		return $this->hasMany('App\Modelos\Municipality');
	}

	// public function agencies(){
	// 	return $this->hasMany('App\Modelos\Agency');
	// }

}
