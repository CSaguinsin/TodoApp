<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600&family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Do Smart</title>
</head>
    <body>
        @extends('layout.app')
        @include('firstSection')
        @include('secondSection')
        @include('thirdSection')
    </body>
</html>
