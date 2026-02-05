<header>
    <div class="container">
        <div style="display:flex; align-items:center; justify-content:space-between;">
            <strong>Meu Sistema Laravel</strong>

            <nav class="nav">
                <a href="/usuarios">Usuários</a>
                <a href="/usuarios/criar">Cadastrar</a>

                @auth
                    <form action="{{ route('logout') }}" method="POST" class="inline">
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