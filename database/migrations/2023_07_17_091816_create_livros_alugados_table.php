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
            $table->foreignId('cliente_id')->constrained('cliente');
            $table->date('data_aluguel');
            $table->date('data_devolucao')->nullable();
            $table->date('data_prevista_devolucao');
            $table->boolean('status')->default(false);
            $table->boolean('atrasado')->default(false);
            $table->integer('multa')->default(0)->nullable();
            $table->timestamps();
        });


        Schema::table('livros_alugados', function (Blueprint $table) {
            $table->index('livro_id');
            $table->index('cliente_id');
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
