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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->string('autor', 100);
            $table->date('data_publicacao');
            $table->timestamps();
        });

//        Schema::table('livros', function (Blueprint $table) {
//            $table->index('livro_id');
//            $table->foreignId('livro_id')->constrained('livros');
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
