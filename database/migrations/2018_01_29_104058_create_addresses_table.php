<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addressable_id')->unsigned();
            $table->string('addressable_type'); //user, institute, branches
            $table->integer('village_id')->unsigned();
            $table->integer('post_office_id')->unsigned();
            $table->string('institute_id'); //a student, teacher(user) same address for diffrent institute. institute_id comaseperate
            $table->boolean('local_guaedian')->default(false);
            $table->boolean('permanent')->default(true);
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
        Schema::dropIfExists('addresses');
    }
}
