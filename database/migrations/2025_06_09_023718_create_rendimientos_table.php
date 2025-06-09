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
        Schema::create('rendimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orden_produccion_id');
            $table->decimal('cantidad_mp', 10, 2);
            $table->decimal('precio_mp', 10, 2);
            $table->decimal('precio_otros_mp', 10, 2);
            $table->unsignedBigInteger('margen_ganancia'); // referencia a parametros.id
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            // Llaves foráneas
            $table->foreign('orden_produccion_id')->references('id')->on('orden_produccion')->onDelete('cascade');
            $table->foreign('margen_ganancia')->references('id')->on('parametros')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendimientos');
    }
};
