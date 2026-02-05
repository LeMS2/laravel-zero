@extends('layouts.app')

@section('title', 'Perfil')

@section('content')
    <h1>Perfil</h1>

    <p><strong>Nome:</strong> {{ $nome }}</p>
    <p><strong>Área:</strong> {{ $area }}</p>
@endsection