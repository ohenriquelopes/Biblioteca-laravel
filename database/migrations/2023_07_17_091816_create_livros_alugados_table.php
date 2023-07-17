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
        Schema::create('livros_alugados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('livro_id')->constrained('livros');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->date('data_aluguel');
            $table->date('data_devolucao');
            $table->date('data_devolvido')->nullable();
            $table->boolean('devolvido')->default(false);
            $table->boolean('atrasado')->default(false);
            $table->integer('multa')->default(0);
            $table->string('observacao', 100)->nullable();
            $table->string('status', 100)->default('Alugado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros_alugados');
    }
};
