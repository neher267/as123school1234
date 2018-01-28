<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstituteFor extends Model
{
    use SoftDeletes;

    protected $table = 'institutes_for';
    
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */	

	protected $dates = ['deleted_at'];

	public function institutes()
	{
		return $this->hasMany(Institute::class, 'institutes_for_id', 'id');
	}


}
