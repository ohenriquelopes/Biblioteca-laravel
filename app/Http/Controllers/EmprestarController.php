<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivrosAlugados;

class EmprestarController extends Controller
{

    public function index()
    {
        return view('site.emprestar');
    }
    public function emprestar(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required',
            'id_livro' => 'required',
            'data_emprestimo' => 'required',
            'data_devolucao' => 'required'
        ]);

        LivrosAlugados::create([
            'livro_id' => $request->input('id_livro'),
            'cliente_id' => $request->input('id_cliente'),
            'data_aluguel' => $request->input('data_emprestimo'),
            'data_devolucao' => $request->input('data_devolucao'),
            'data_prevista_devolucao' => '2024-10-10', // defina o valor apropriado aqui
            'status' => 1,
            'atrasado' => false,
            'multa' => 0,
        ]);

        // Redirecionar ou retornar uma resposta de sucesso
        return redirect()->back()->with('success', 'Dados do empréstimo salvos com sucesso!');


    }
}
