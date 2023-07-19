@extends('site.layouts.basic')

@section('titulo', 'Livros Disponiveis')

@section('conteudo')

    <div>
        <h1>Biblioteca</h1>
    </div>
    <div>
        <h2>Livros Disponiveis</h2>
{{--        <p>Formulario para emprestar um livro</p>--}}
{{--        <ul>--}}
{{--            @foreach($livros as $livro)--}}
{{--                <li>--}}
{{--                    <a href="{{ route('site.livros_disponiveis', $livro->id) }}">--}}

{{--                        {{ $livro->titulo }}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}

        @foreach($livros as $livro)
            <tr>
                ##############################################<br>
                <td>Titulo: {{ $livro->titulo }}<br></td>
                <td>Autor: {{ $livro->autor }}<br></td>
                <td>Data Publicacao: {{ $livro->data_publicacao }}<br></td>
                @if($livro->disponivel = true)
                    <td>Livro Disponivel<br></td>
                @else
                    <td>Livro Indisponivel<br></td>
                @endif
                ##############################################<br>
                <br>
            </tr>
        @endforeach
    </div>
@endsection
