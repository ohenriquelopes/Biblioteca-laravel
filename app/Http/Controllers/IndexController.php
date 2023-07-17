<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function principal()
    {
        return view ('site.index');
    }


    public function salvarCliente(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required|email',
            'cpf' => 'required|cpf'
//            'ativo' => 'required'
        ],[
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'telefone.required' => 'O campo telefone é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
            'cpf.required' => 'O campo cpf é obrigatório',
            'cpf.cpf' => 'O campo cpf deve ser um cpf válido'
//            'ativo.required' => 'O campo ativo é obrigatório'
        ]);

        $cliente = new Cliente();
        $cliente->create($request->all());

        $cliente = new Cliente([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf'),
            'ativo' => 1

        ]);

        $cliente->save();



    }

    public function emprestarLivro(Request $request)
    {

    }

}
