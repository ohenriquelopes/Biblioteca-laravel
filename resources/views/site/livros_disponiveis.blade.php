@extends('site.layouts.basic')

@section('titulo', 'Livros Disponiveis')

@section('conteudo')

    <div>
        <h1>Biblioteca</h1>
    </div>
    <div>
        <h2>Livros Disponiveis</h2>
{{--        <p>Formulario para emprestar um livro</p>--}}
        <ul>
            @foreach($livros as $livro)
                <li>
                    <a href="{{ route('site.livros_disponiveis', $livro->id) }}">
                        {{ $livro->titulo }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
