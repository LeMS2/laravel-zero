@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <h1>Olá, {{ $nome }} 👋</h1>
    <p>Essa página já usa layout profissional.</p>
@endsection