<?php

use App\District;
use App\Division;
use App\PostOffice;
use App\Upazila;
use App\Village;
use App\Institute;
use App\InstituteFor;
use App\InstituteType;
use App\OwnerType;

Route::get('/', function () {

    // $district = new District;

    // $district->name = "Jhalokati";
    // $district->slug = "jhalokati";
    // $district->division()->associate(1);
    
    // $district->save();

    // $data = new Upazila;

    // $data->name = "Kathalia";
    // $data->slug = "kathalia";
    // $data->district()->associate(1);
    
    // $data->save();


    // $data = new PostOffice;

    // $data->name = "Amua";
    // $data->slug = "amua";
    // $data->code = '8431';
    // $data->upazila()->associate(1);
    
    // $data->save();

    /*$data = new Village;
    $data->name = "Rampur";
    $data->slug = "rampur";
    $data->post_office()->associate(1);
    $data->upazila()->associate(1);

    $data->save();*/


    // $data = new InstituteType;
    // $data->name = "Secondary";
    // $data->slug = "secondary";
    // $data->save();

    // $data = new InstituteFor;
    // $data->name = "All";
    // $data->slug = "all";
    // $data->save();

    // $data = new OwnerType;
    // $data->name = "Govment";
    // $data->slug = "govment";
    // $data->save();


/*    $data = new Institute;
    $data->name = "Bnashabunia Secondary School";
    $data->slug = "banshbunia-secondary-school";
    $data->institute_type()->associate(2);
    $data->institute_for()->associate(1);
    $data->owner_type()->associate(2);
    $data->village()->associate(1);

    $data->code = '4567';
    $data->location = 'location2';

    $data->save();*/

    // $upazila = Upazila::find(1);
    // dd($upazila->villages);

    // $type = InstituteType::find(1);
    // dd($type->institutes);

    $for = InstituteFor::find(1);
    $institutes  = $for->institutes;
    dump($institutes[0]->name);
    $village =$institutes[0]->village;
    dump($village->name2);
    $upazila = $village->upazila;
    dump($upazila->name);
    $district = $upazila->district;
    dump($district->name);

    $Institute = Institute::with(['institute_type', 'institute_for', 'owner_type', 'village','village.upazila','village.upazila.district'])->find(1);
    dd($Institute);








});
