@extends('layouts.app')

@section('title', 'Usuários')

@section('page_title', 'Usuários')
@section('page_subtitle', 'Lista de usuários cadastrados no sistema')

@section('page_actions')
    <a class="btn btn-primary" href="/usuarios/criar">+ Cadastrar Usuário</a>
@endsection

@section('content')
    @if($usuarios->isEmpty())
        <p>Nenhum usuário cadastrado ainda.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Área</th>
                    <th>Criado em</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($usuarios as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->nome }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->area }}</td>
                        <td>{{ $u->created_at?->timezone('America/Sao_Paulo')->format('d/m/Y H:i') }}</td>
                        <td>
                            <div class="actions">
                                <a class="btn btn-muted" href="/usuarios/{{ $u->id }}/editar">Editar</a>

                                <form class="inline" action="/usuarios/{{ $u->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection