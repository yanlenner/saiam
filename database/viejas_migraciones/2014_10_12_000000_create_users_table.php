<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->smallInteger('pregunta_seguridad_uno');
            $table->smallInteger('pregunta_seguridad_dos');
            $table->foreign('pregunta_seguridad_uno')->references('id_pregunta')->on('preguntas_de_seguridad');
            $table->foreign('pregunta_seguridad_dos')->references('id_pregunta')->on('preguntas_de_seguridad');
            $table->string('respuesta_seguridad_uno');
            $table->string('respuesta_seguridad_dos');
            $table->char('permisos', 5)->default('0');
            $table->timestamp('ultimo_ingreso');
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
        Schema::dropIfExists('users');
    }
}
