<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta hhtp-equiv="X-UA-compatible" content="ie=edge">
    <title>@yield('jugeteria')</title>
</head>
<body>
    <header>
    </header>
    <nav>
    </nav>
    <div class="Content">
        @yield('content')
    </div>
    <footer>
    </footer>
</body>
</html>