<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->increments('id_calif');
            $table->string('calif_1',40);
            $table->string('calif_2',40);
            $table->string('calif_3',40);
            $table->string('calif_4',40);
            $table->string('calif_5',40);
            $table->integer('id_alum')->unsigned();
            $table->foreign('id_alum')->references('id_alum')->on('alumnos');
            $table->integer('id_mate')->unsigned();
		    $table->foreign('id_mate')->references('id_mate')->on('materias');
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
        Schema::dropIfExists('calificacions');
    }
}
