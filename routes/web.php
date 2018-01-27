<?php

use App\District;
use App\Division;
use App\PostOffice;
use App\Upazila;
use App\Village;

Route::get('/', function () {

    $district = new District;

    $district->name = "Jhalokati";
    $district->division()->associate(1);
    
    $district->save();

    $data = new Upazila;

    $data->name = "Kathalia";
    $data->district()->associate(1);
    
    $data->save();


     $data = new PostOffice;

    $data->name = "Amua";
    $data->code = 8431;
    $data->upazila()->associate(1);
    
    $data->save();


});
