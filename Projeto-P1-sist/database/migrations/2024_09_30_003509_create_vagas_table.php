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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->boolean("ocupado");
            $table->foreignId("veiculo_id")
                    ->references('id')
                    ->on("veiculos",)
                    ->onDelete("restrict");
            $table->foreignId("clientes_id")
                    ->references('id')
                    ->on("clientes",)
                    ->onDelete("restrict");
            $table->dateTime("hora_entrada")->useCurrent();
            $table->string("hora_saida")->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
