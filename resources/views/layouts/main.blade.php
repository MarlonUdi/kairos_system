<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Fonte google --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- 
        -------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- ---------------- --}}
    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
    <title>@yield('title')</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/logo_kairos.png" alt="HDC Events">
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a href="/registros" class="nav-link">Registros</a>
                </li>
                <li class="nav-item">
                    <a href="/relatorios" class="nav-link">Relatórios</a>
                </li>
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
    @yield('content')
    <footer>
        <p>Kairos &copy; 2023</p>
    </footer>
</body>

</html>
