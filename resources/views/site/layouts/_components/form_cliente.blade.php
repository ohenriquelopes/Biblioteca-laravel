{{ $slot }}

{{--Cadastro cliente--}}

<form action{{ route('site.index') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="email" placeholder="Email" class="{{ $classe }}">
    <br>
    <input name="cpf" value="{{ old('cpf') }}" type="text" placeholder="CPF" class="{{ $classe }}">
    <br>
    <button type="submit" class="{{ $classe }}">{{ $Button }}</button>
</form>
