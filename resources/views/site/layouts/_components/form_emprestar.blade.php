{{ $slot }}

{{--Emprestar livro--}}

<form action="{{ route('site.emprestar.processar') }}" method="post">
    @csrf
    <input name="id_cliente" value="{{ old('id_cliente') }}" type="number" placeholder="Id Cliente" class="{{ $classe }}">
    <br>
    <input name="id_livro" value="{{ old('id_livro') }}" type="number" placeholder="ID Livro" class="{{ $classe }}">
    <br>
    <input name="data_emprestimo" value="{{ old('data_emprestimo') }}" type="text" placeholder="Data Emprestimo" class="{{ $classe }}">
    <br>
    <input name="data_devolucao" value="{{ old('data_devolucao') }}" type="text" placeholder="Data Devolucao" class="{{ $classe }}">
    <br>
    <button type="submit" class="{{ $classe }}">{{ $Button }}</button>
</form>
