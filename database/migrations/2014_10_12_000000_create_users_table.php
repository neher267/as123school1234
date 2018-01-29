<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->enum('role',
                [
                    'student',
                    'teacher',
                    'admin',
                    'super admin',
                    'operator', 
                    'head teacher', 
                    'moderator',
                    'site-operator', 
                    'site-admin', 
                    'site-chairman'
                ]);
            $table->string('mobile')->unique();
            $table->integer('country_id')->unsigned()->default(1);  //Bangladesh;
            $table->tinyInteger('gender_id')->unsigned();
            $table->tinyInteger('religion_id');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
