<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificacionPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identificacion_personas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_partida_nacimiento')->unique()->nullable();
            $table->foreign('id_partida_nacimiento')->references('id_partida_nacimiento')->on('partidas_de_nacimiento');
            $table->string('no_cedula', 10)->unique()->nullable();
            $table->string('no_pasaporte', 9)->unique()->nullable();
            $table->string('primer_nombre', 50);
            $table->string('segundo_nombre', 50)->nullable();
            $table->string('primer_apellido', 50);
            $table->string('segundo_apellido', 50)->nullable();
            $table->char('pais_nacimiento', 2);
            $table->foreign('pais_nacimiento')->references('iso_3166_2')->on('paises');
            $table->date('fecha_nacimiento');
            $table->char('genero', 1);
            $table->smallInteger('estado_civil');
            $table->foreign('estado_civil')->references('id_estado_civil')->on('estados_civiles');
            $table->smallInteger('rol');
            $table->foreign('rol')->references('id_rol')->on('roles');
            #$table->boolean('residencia_legal')->nullable();
            #$table->date('fecha_inicio_rl')->nullable();
            #$table->boolean('impedimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identificacion_personas');
    }
}
