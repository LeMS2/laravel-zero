@extends('layouts.app')

@section('title', 'Cadastrar Usuário')

@section('content')
    <h1>Cadastrar Usuário</h1>

    {{-- mensagens de erro --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin:0; padding-left:18px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/usuarios">
        @csrf

        <div>
            <label>Nome</label><br>
            <input type="text" name="nome" value="{{ old('nome') }}">
        </div>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            <label>Área</label><br>
            <input type="text" name="area" value="{{ old('area') }}">
        </div>

        <br>

        <button type="submit">Salvar</button>
    </form>
@endsection