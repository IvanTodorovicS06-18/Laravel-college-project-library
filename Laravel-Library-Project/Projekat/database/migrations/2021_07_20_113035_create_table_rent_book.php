<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRentBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('IzdavanjeKnjiga', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('userID')->unsigned(); 
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('knjigaID')->unsigned(); 
            $table->foreign('knjigaID')->references('knjigaID')->on('Knjige')->onDelete('cascade');
            $table->date('datumIzdavanja');
            $table->date('datumVracanja')->nullable();
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
        Schema::dropIfExists('table_rent_book');
    }
}
