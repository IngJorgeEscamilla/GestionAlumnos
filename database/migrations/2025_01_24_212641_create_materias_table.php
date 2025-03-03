<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nomMateria');
            $table->string('clave')->unique();
            $table->string('horas');
            
            //$table->unsignedBigInteger('alumno_id');
            //$table->foreign('alumno_id')->references('id')->on('alumnos');
            //$table->unsignedBigInteger('calificacion_id');
            //$table->foreign('calificacion_id')->references('id')->on('calificaciones');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
