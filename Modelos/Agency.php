<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
	//
	protected $fillable = [
		'name',
		'abbr',
		'desc',
		'component_id'
	];

	public function projects(){
		return $this->hasMany('App\Modelos\Project');
	}

	public function components(){
		return $this->belongsTo('App\Modelos\Component');
	}
}
