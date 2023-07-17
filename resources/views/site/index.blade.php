@extends('site.layouts.basic')

@section('titulo', 'Home')

@section('conteudo')

<div>
    <h1>Biblioteca</h1>
</div>
<div>
    <h2>Formulário</h2>
    <p>Formulario para emprestar um livro</p>
    @component('site.layouts._components.form_basic', ['classe' => 'borda-preta', 'Button' => 'Emprestar'])

    @endcomponent
</div>
@endsection
