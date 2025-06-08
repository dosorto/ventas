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
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre_departamento', 100); 
            $table->foreignId('pais_id')->constrained('paises'); 
            $table->timestamps(); 
            $table->softDeletes(); 
            $table->integer('created_by')->nullable(); 
            $table->integer('updated_by')->nullable(); 
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departamentos');
    }
};
