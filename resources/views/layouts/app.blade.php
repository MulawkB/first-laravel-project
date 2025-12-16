<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('hotbar')</title>
</head>
<body>
    <header>
        <h1>@yield('title')</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2025 - Tous droits réservés</p>
    </footer>
</body>
</html>