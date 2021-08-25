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

            $table->id('userID');
            $table->string('firstName', 40);
            $table->string('lastName', 20);
            $table->enum('privilegeLevel', array('ADMINISTRATOR','USER', 'EDITOR'))->default('USER');
            $table->string('password');
            $table->string('adress', 250);
            $table->string('email', 150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
