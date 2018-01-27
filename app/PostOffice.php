<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostOffice extends Model
{
    	use SoftDeletes;
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */	

	protected $dates = ['deleted_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'code'];

	public function upazila()
	{
		return $this->belongsTo(Upazila::class);
	}

	public function villages()
	{
		return $this->hasMany(Village::class);
	}
}
