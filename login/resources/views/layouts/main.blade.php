<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    
    <!-- Fonte do Goole -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- Css da Aplicação -->
    <link rel="stylesheet" href="@yield('css')">
</head>
<body>
    @if(session('msg'))
        <p class="msg">{{session('msg')}}</p>
    @endif
    @yield('content')
    <div class="navegar" @yield('navegar')>
        <h2>Navegue Pelo Site:</h2>
        <a href="/animes/welcome" class="navegar">Pagina Principal</a>
        <a href="/animes/adicionar" class="navegar">Adicionar Animes</a>
        @guest
        <a href="/login" class="navegar">Login</a>
        <a href="/register" class="navegar">Cadastrar</a>
        @endguest
        @auth
        <form action="/logout" method="POST">
            @csrf
            <a href="/logout"
            onclick="event.preventDefault();
                    this.closest('form').submit();"
            > Sair</a>
        </form>
        @endauth

    </div>
</body>
<footer @yield('footer')>
    <p>Bernardo &copy; 2021</p>
</footer>
</html>