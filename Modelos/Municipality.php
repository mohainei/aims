<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    //
	protected $fillable = [
		'name',
		'land_area',
		'classification',
		'physical_desc',
		'province_id'
	];

	public function brgy(){
		return $this->hasMany('App\Modelos\Brgy\Brgy');
	}

	// single inverse relation to province 
	public function province(){
		return $this->belongsTo('App\Modelos\Province', 'province_id');
	}

}
