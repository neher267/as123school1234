<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use SoftDeletes;
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */	

	protected $dates = ['deleted_at'];

	public function institute_type()
	{
		return $this->belongsTo(InstituteType::class);
	}

	public function institute_for()
	{
		return $this->belongsTo(InstituteFor::class, 'institutes_for_id','id');
	}

	public function owner_type()
	{
		return $this->belongsTo(OwnerType::class);
	}

	public function village()
	{
		return $this->belongsTo(Village::class);
	}

}
