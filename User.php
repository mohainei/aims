<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'firstname','lastname', 'email', 'password','username','is_active',
		'middlename', 'gender', 'position','contact_no', 'department'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */

	protected $hidden = [
		'password', 'remember_token',
	];

	public function setDepartmentAttribute($input)
	{
		$this->attributes['department'] = $input ? $input : null;
	}

	public function setGenderAttribute($input)
	{
		if ($input=='Male')
			$this->attributes['gender'] = 'm';
		else if($input=='Female')
			$this->attributes['gender'] = 'f';
	}

	public function getGenderAttribute()
	{
		if ($this->attributes['gender']=='m')
			$this->attributes['gender'] = 'Male';
		else if($this->attributes['gender'] == 'f')
			$this->attributes['gender'] = 'Female';
	}
}
