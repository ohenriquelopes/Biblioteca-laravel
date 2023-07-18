{{ $slot }}

{{--Cadastro livro--}}

<form action{{ route('site.index') }} method="post">
    @csrf
    <input name="titulo" value="{{ old('titulo') }}" type="text" placeholder="Titulo" class="{{ $classe }}">
    <br>
    <input name="autor" value="{{ old('autor') }}" type="text" placeholder="Autor" class="{{ $classe }}">
    <br>
    <input name="data_publicacao" value="{{ old('data_publicacao') }}" type="text" placeholder="Data_publicacao" class="{{ $classe }}">
    <br>
    <button type="submit" class="{{ $classe }}">{{ $Button }}</button>
</form>
