@extends('site.layouts.basic')

@section('titulo', 'Emprestar')

@section('conteudo')

    <div>
        <h1>Biblioteca</h1>
    </div>
    <div>
        <h2>Emprestar Livro</h2>
        <p>Formulario para emprestar um livro</p>
        @component('site.layouts._components.form_emprestar', ['classe' => 'borda-preta', 'Button' => 'Emprestar'])

        @endcomponent
    </div>
@endsection
