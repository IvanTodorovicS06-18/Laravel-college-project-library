<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Knjige', function (Blueprint $table) {

            $table->id('knjigaID');
            $table->string('imeKnjige', 100);
            $table->unsignedBigInteger('autorID')->unsigned(); 
            $table->foreign('autorID')->references('autorID')->on('Autor')->onDelete('cascade');
            $table->unsignedBigInteger('izdavacID')->unsigned();
            $table->foreign('izdavacID')->references('izdavacID')->on('Izdavac')->onDelete('cascade');
            $table->unsignedBigInteger('zanrID')->unsigned();
            $table->foreign('zanrID')->references('zanrID')->on('Zanr')->onDelete('cascade');
	        $table->integer('kolicina');
            $table->float('ocena');
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
        Schema::dropIfExists('table_book');
    }
}
