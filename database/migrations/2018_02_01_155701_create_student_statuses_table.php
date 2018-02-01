<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_statuses', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('institute_id'); // Institute additonal exam types
            $table->integer('user_id')->unsigned();
            $table->integer('class_id')->unsigned();
            $table->tinyInteger('group_id')->unsigned()->default(null);//science, arts,commercs, cse, bba..
            $table->string('name')->nullable();
            $table->string('section')->nullable();
            $table->string('roll_no',10);// student ID No, Roll NO
            $table->decimal('batch_no',3,0)->unsigned()->nullable();
            $table->decimal('year',4,0)->unsigned();
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
        Schema::dropIfExists('student_statuses');
    }
}
