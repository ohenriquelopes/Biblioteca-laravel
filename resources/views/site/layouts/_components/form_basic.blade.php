{{ $slot }}

<form action{{ route('site.index') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="autor" value="{{ old('autor') }}" type="text" placeholder="Autor" class="{{ $classe }}">
    <br>
    <input name="livro" value="{{ old('livro') }}" type="text" placeholder="Livro" class="{{ $classe }}">
    <br>
    <input name="data" value="{{ old('data') }}" type="text" placeholder="Data" class="{{ $classe }}">
    <br>
    <button type="submit" class="{{ $classe }}">{{ $Button }}</button>
</form>
