{{ $slot }}

<form action{{ route('site.index') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>

    <button type="submit" class="{{ $classe }}">{{ $Button }}</button>
</form>
