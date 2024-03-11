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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nameProject');
            $table->string('Description');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->String('rol');
            $table->String('curso');
            $table->String('carrera');
            $table->String('tecnologias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
