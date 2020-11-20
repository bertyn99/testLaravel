<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Parieur</title>
</head>
<body>
    <p>l'app partial</p>
    @yield('content')
    <footer>
        &copy; Copyright {{date('Y')}}
        &middot; <a href="/about-us">About Us</a>
    </footer>
</body>
</html>