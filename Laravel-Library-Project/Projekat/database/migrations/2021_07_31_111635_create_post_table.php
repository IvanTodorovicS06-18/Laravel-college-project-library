<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id('postID');
            $table->unsignedBigInteger('userID')->unsigned(); 
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('knjigaID')->unsigned(); 
            $table->foreign('knjigaID')->references('knjigaID')->on('Knjige')->onDelete('cascade');
            $table->string('opis', 255);
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
        Schema::dropIfExists('post');
    }
}
