<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePinpointAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinpoint_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pointable_id')->unsigned();
            $table->string('pinpointable_type');
            $table->integer('address_id')->unsigned();
            $table->string('block', 5)->nullable();
            $table->string('road_no', 5)->nullable();
            $table->string('road_name', 5);
            $table->string('house_no', 10)->nullable();
            $table->string('house_name', 50);
            $table->string('floor', 20)->nullable();                                     

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinpoint_addresses');
    }
}
