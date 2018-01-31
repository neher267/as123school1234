<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questionable_id')->unsigned();
            $table->string('questionable_type'); //board, institute, custome
            $table->integer('class_id')->unsigned();//psc, ssc, jsc, hsc, bsc
            $table->integer('subject_id')->unsigned();
            $table->integer('year_id')->unsigned();
            $table->boolean('multi');//(multiple coice, hard-qsn(img))
            $table->text('question');
            $table->float('marks', 5, 2);
            $table->tinyInteger('lavel'); //level-1,2..easy, medium ...  
            $table->string('set')->nullable();
            $table->integer('time')->unsigned()->nullable();//seconds
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
        Schema::dropIfExists('questions');
    }
}
