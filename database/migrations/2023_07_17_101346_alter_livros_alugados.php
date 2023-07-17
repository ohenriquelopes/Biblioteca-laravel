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
        Schema::table('livros_alugados', function (Blueprint $table) {
            $table->foreignId('livro_id')->after('id')->constrained('livros');
            $table->foreignId('cliente_id')->after('livro_id')->constrained('clientes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('livros_alugados', function (Blueprint $table) {
            $table->dropForeign(['livro_id']);
            $table->dropForeign(['cliente_id']);
            $table->dropColumn(['livro_id', 'cliente_id']);
        });
    }
};
