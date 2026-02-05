<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Zero')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f6f7fb;
            color: #222;
        }

        .container {
            max-width: 980px;
            margin: 0 auto;
            padding: 24px;
        }

        header, footer {
            background: #fff;
            border-bottom: 1px solid #e6e8ef;
        }

        header .container,
        footer .container {
            padding: 16px 24px;
        }

        h1 {
            margin: 0 0 16px;
            font-size: 24px;
        }

        a {
            color: #2b59ff;
            text-decoration: none;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }

        .nav a {
            margin-right: 12px;
        }

        .card {
            background: #fff;
            border: 1px solid #e6e8ef;
            border-radius: 10px;
            padding: 18px;
            box-shadow: 0 2px 8px rgba(0,0,0,.04);
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid #d7dbe7;
            background: #fff;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-primary {
            background: #2b59ff;
            border-color: #2b59ff;
            color: #fff;
        }

        .btn-danger {
            background: #ff3b30;
            border-color: #ff3b30;
            color: #fff;
        }

        .btn-muted {
            background: #f2f4f8;
        }

        .btn:hover {
            filter: brightness(0.95);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }

        .table th,
        .table td {
            padding: 10px 12px;
            border-bottom: 1px solid #eef0f6;
            text-align: left;
        }

        .table th {
            background: #fafbff;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: .04em;
            color: #556;
        }

        .form-row {
            margin-bottom: 12px;
        }

        label {
            font-weight: 700;
            display: block;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d7dbe7;
            border-radius: 8px;
        }

        input:focus {
            outline: 2px solid rgba(43,89,255,.2);
            border-color: #2b59ff;
        }

        .alert {
            padding: 10px 12px;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .alert-success {
            background: #e9fbef;
            border: 1px solid #bce8c9;
            color: #1e6b36;
        }

        .alert-danger {
            background: #ffeceb;
            border: 1px solid #ffb8b3;
            color: #7a1c16;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        form.inline {
            display: inline;
            margin: 0;
        }
    </style>
</head>

<body>

<header>
    <div class="container">
        <div style="display:flex; align-items:center; justify-content:space-between;">
            <strong>Meu Sistema Laravel</strong>

            <nav class="nav">
                <a href="/usuarios">Usuários</a>
                <a href="/usuarios/criar">Cadastrar</a>

                @auth
                    <span style="margin-left:12px;">
                        {{ auth()->user()->name }}
                    </span>

                    <form action="{{ route('logout') }}" method="POST" class="inline" style="margin-left:12px;">
                        @csrf
                        <button class="btn btn-muted" type="submit">Sair</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Entrar</a>
                    <a href="{{ route('register') }}">Cadastrar</a>
                @endauth
            </nav>
        </div>
    </div>
</header>

<div class="container">
    <div class="card">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</div>

<footer>
    <div class="container">
        © {{ date('Y') }} - Laravel Zero
    </div>
</footer>

</body>
</html>