<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('main.accueil') }}">Accueil</a>
            <a href="{{ route('main.cours') }}">Cours</a>
            <a href="{{ route('main.tarifs') }}">Tarifs</a>
            <a href="{{ route('main.contact') }}">Contact</a>
            <a href="{{ route('main.mentions-legales') }}"> Mentions Légales</a>
        </nav>
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        <a href="{{ route('main.mentions-legales') }}"> Mentions Légales</a>
    </footer>
</body>
</html>