@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1>Editar Usuário</h1>

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin:0; padding-left:18px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/usuarios/{{ $usuario->id }}">
        @csrf
        @method('PUT')

        <div>
            <label>Nome</label><br>
            <input type="text" name="nome" value="{{ old('nome', $usuario->nome) }}">
        </div>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email', $usuario->email) }}">
        </div>

        <div>
            <label>Área</label><br>
            <input type="text" name="area" value="{{ old('area', $usuario->area) }}">
        </div>

        <br>

        <button type="submit">Atualizar</button>
        <a href="/usuarios">Cancelar</a>
    </form>
@endsection