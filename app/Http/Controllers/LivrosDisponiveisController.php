<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosDisponiveisController extends Controller
{

    public function index()
    {
        $livros = Livro::where('disponivel', true)->get(); // Exemplo de consulta para obter livros disponíveis
        return view('site.livros_disponiveis', compact('livros'));
    }

    private function showLivros()
    {
        $livros = Livro::all(); // Recupera todos os registros da tabela "livros"
        return view('nomedaoview', compact('livros'));
    }


}
