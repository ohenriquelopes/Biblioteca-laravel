<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivrosAlugados extends Model
{
    use HasFactory;

    protected $fillable = [
        'livro_id',
        'cliente_id',
        'data_aluguel',
        'data_devolucao',
        'data_prevista_devolucao',
        'status',
        'atrasado',
        'multa',
    ];

    protected $table = 'livros_alugados';

    // Relacionamento com a tabela "livros"
    public function livro()
    {
        return $this->belongsTo(Livro::class, 'livro_id');
    }

    // Relacionamento com a tabela "cliente"
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
