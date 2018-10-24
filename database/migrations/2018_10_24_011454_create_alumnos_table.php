<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id_alum');
            $table->string('nom_al',40);
            $table->string('app_al',40);
            $table->string('apm_al',40);
            $table->string('sexo',20);
            $table->string('calle',40);
            $table->string('localidad',40);
            $table->string('foto_al',40);
            $table->string('codigo_al',40);
            $table->integer('id_gen')->unsigned();
		    $table->foreign('id_gen')->references('id_gen')->on('generacions');
            $table->integer('id_grado')->unsigned();
            $table->foreign('id_grado')->references('id_grado')->on('grados');
            $table->integer('id_mun')->unsigned();
            $table->foreign('id_mun')->references('id_mun')->on('municipios');
            $table->integer('id_grupo')->unsigned();
		    $table->foreign('id_grupo')->references('id_grupo')->on('grupos');
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
        Schema::dropIfExists('alumnos');
    }
}
