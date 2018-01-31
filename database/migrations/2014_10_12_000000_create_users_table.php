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
            $table->integer('country_id')->unsigned()->default(1);  //Bangladesh;
            $table->tinyInteger('gender_id')->unsigned();
            $table->tinyInteger('religion_id');                        
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->enum('role',
                [
                    'student',
                    'student-guest',
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
            $table->string('user_name')->unique(); 
            // login name; teacher: mobile_no+33    student: guardian_mobile_no+1,2,3--- guest-student:mobile    moderator:mobile+22
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
