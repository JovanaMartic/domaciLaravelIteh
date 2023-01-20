<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransakcijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transakcijas', function (Blueprint $table) {
            $table->id();
            $table->string('datum');
            $table->string('tip');
            $table->string('valuta');
            $table->double('iznos');
            $table->foreignId('korisnik_id')->constrained('korisniks');
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
        Schema::dropIfExists('transakcijas');
    }
}
