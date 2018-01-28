<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

public function scopeLogo($query)
{
    return $query->where('type', 'logo');
}


    public function imageable()
    {
        return $this->morphTo();
    }

}
