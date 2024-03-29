<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <nav>
        @include('layout.navbar')
    </nav>

    <div>
        @yield('content')
    </div>

    <div>
        @yield('secondSection')
    </div>

    <div>
        @yield('thirdSection')
    </div>

    <footer>
        @include('layout.footer')
    </footer>
</body>
</html>
