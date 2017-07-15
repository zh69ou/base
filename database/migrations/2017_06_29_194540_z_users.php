<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ZUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',18)->unique();
            $table->string('email',32)->nullable();
            $table->string('phone',32)->nullable();
            $table->string('password');
            $table->string('himg');
            $table->json('roles');
            $table->dateTime('regtime');
            $table->smallInteger('approve');
            $table->smallInteger('state');
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
        Schema::drop('z_users');
    }
}
