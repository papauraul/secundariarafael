<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id_tut');
            $table->string('nom_tut',40);
            $table->string('app_tut',40);
            $table->string('apm_tut',40);
            $table->string('edad',40);
            $table->string('sexo',40);
            $table->string('parentensco',40);
            $table->string('calle',40);
            $table->string('localidad',40);
            $table->string('telefono',40);
            $table->string('foto_tut',40);
            $table->integer('id_alum')->unsigned();
            $table->foreign('id_alum')->references('id_alum')->on('alumnos');
            $table->integer('id_mun')->unsigned();
		    $table->foreign('id_mun')->references('id_mun')->on('municipios');
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
        Schema::dropIfExists('tutors');
    }
}
