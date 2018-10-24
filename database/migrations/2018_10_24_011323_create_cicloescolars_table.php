<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCicloescolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cicloescolars', function (Blueprint $table) {
            $table->increments('id_ce');
            $table->string('ciclo escolar');
            $table->integer('id_gen')->unsigned();
		    $table->foreign('id_gen')->references('id_gen')->on('generacions');
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
        Schema::dropIfExists('cicloescolars');
    }
}
