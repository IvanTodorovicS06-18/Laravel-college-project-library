<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePublisher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Izdavac', function (Blueprint $table) {

            $table->id('izdavacID');
            $table->string('imeIzdavaca', 100);
            $table->string('adress', 250);
            $table->string('email', 150)->unique();
            $table->string('brojTelefona', 25);
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
        Schema::dropIfExists('table_publisher');
    }
}
