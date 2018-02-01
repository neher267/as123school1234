<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id')->unsigned();
            $table->integer('institute_id')->unsigned()->nullable(); // Institute additonal exam types
            $table->string('name');
            $table->decimal('pass_marks',2,0)->unsigned();
            $table->decimal('total_marks',3,0)->unsigned();
            $table->timestamps();

            $table->unique(['class_id', 'institute_id', 'name']);   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_types');
    }
}
