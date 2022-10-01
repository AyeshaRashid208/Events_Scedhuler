<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');
            $table->string('last_name');

            $table->string('email')->unique();

            $table->datetime('email_verified_at')->nullable();

            $table->string('password');

            $table->string('remember_token')->nullable();
            
            $table->string('profession')->nullable();
            $table->string('city')->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('postcode')->nullable();
            $table->string('bio')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
