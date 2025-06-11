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
        Schema::create('productos', function (Blueprint $table) {
        $table->id();

       // $table->integer('unidad_de_medida_id')->nullable();
        $table->foreignId('unidad_de_medida_id')->constrained('unidades_medidas');
        $table->string('nombre', 100);
        $table->text('descripcion')->nullable();
        $table->text('descripcion_corta')->nullable();
        $table->string('sku', 100)->nullable();
        $table->string('codigo', 100)->nullable();
        $table->string('color', 100)->nullable();

        $table->timestamps(); // created_at y updated_at
        $table->softDeletes(); // deleted_at

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
        Schema::dropIfExists('productos');
    }
};
