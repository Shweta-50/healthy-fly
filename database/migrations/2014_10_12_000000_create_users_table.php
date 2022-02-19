<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('u_type')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('specilist')->nullable();
            $table->string('education')->nullable();
            $table->string('fees')->nullable();
            $table->string('gender')->nullable();
            $table->rememberToken();
           // $table->string('profile_photo', 2048)->default('/assets/img/avtar.jpg/');
           $table->string('profile_photo', 2048)->nullable();
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
