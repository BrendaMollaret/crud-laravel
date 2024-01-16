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
    {   //Primero cree esta base de datos con el comando
        //php artisan make:migration create_tasks_table
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->text('Descripción');
            $table->dateTime('Tiempo limite')->nullable();
            $table->enum('Estado',['Pendiente','En progreso', 'Completada']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
