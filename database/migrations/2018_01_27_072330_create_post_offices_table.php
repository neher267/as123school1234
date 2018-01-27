<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('slug', 30)->unique();
            $table->integer('upazila_id')->unsigned();
            $table->string('code',4);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('upazila_id')->references('id')->on('upazilas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_offices');
    }
}
