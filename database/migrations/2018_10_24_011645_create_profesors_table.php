<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->increments('id_profe');
            $table->string('rfc',40);
            $table->string('nombre',40);
            $table->string('app',40);
            $table->string('apm',40);
            $table->string('sexo',20);
            $table->string('edad',40);
            $table->string('calle',40);
            $table->string('localidad',40);
            $table->string('telefono',40);
            $table->string('foto_prof',40);
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
        Schema::dropIfExists('profesors');
    }
}
