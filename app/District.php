<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
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

	public function division()
	{
		return $this->belongsTo(Division::class);
	}

	public function upazilas()
	{
		return $this->hasMany(Upizala::class);
	}
    
}
