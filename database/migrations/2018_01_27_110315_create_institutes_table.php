<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('institute_type_id')->unsigned(); //Primary, High school, 
            $table->integer('owner_type_id')->unsigned(); // Govement, Half Govement, Private
            $table->integer('institutes_for_id')->unsigned(); //All, Girls, Boys
            $table->integer('village_id')->unsigned(); //All, Girls, Boys
            $table->string('slug')->unique();
            $table->string('code')->unique();
            $table->text('location');
            $table->softDeletes();
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
        Schema::dropIfExists('institutes');
    }
}
