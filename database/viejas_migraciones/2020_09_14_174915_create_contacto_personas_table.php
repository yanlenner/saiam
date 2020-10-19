<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_personas', function (Blueprint $table) {
            $table->integer('persona')->primary();
            $table->foreign('persona')->references('id')->on('identificacion_personas');
            $table->string('estado', 4);
            $table->foreign('estado')->references('iso_3166_2_ve')->on('estados');
            $table->smallInteger('municipio');
            $table->foreign('municipio')->references('id_municipio')->on('municipios');
            $table->smallInteger('parroquia');
            $table->foreign('parroquia')->references('id_parroquia')->on('parroquias');
            $table->integer('consejo_comunal');
            $table->foreign('consejo_comunal')->references('id_consejo_comunal')->on('consejos_comunales');
            $table->string('ciudad', 50);
            $table->string('ubicacion', 50);
            $table->string('calle', 50);
            $table->string('estructura', 50);
            $table->string('correo_electronico', 50);
            $table->timestamp('verificacion_ce')->nullable();
            $table->string('no_telefono', 12)->nullable();
            $table->string('no_celular', 12);
            $table->text('ruta_foto_perfil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto_personas');
    }
}
