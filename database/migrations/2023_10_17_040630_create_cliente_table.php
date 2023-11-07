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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Correo');
            $table->string('Teléfono');
            $table->string('Dirección');
            $table->string('DUI');
            $table->bigInteger('Crédito')->unsigned();
            $table->foreign('Crédito')->references('id')->on('credito');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
