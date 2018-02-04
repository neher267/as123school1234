<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_status_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->integer('exam_type_id')->unsigned();
            $table->decimal('marks',3,0);
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
        Schema::dropIfExists('student_results');
    }
}
