<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upazila extends Model
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
	protected $fillable = ['name'];

	public function district()
	{
		return $this->belongsTo(District::class);
	}

	public function post_offices()
	{
		return $this->hasMany(PostOffice::class);
	}

	public function villages()
	{
		return $this->hasMany(Village::class);
	}
}
