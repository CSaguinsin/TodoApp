<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600&family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>To-Do's</title>
</head>
<body>
    @extends('layout.todoApp')
    @include('layout.sidebar')
    @include('todoViews.todoHeader')

    <section class="pt-10 flex justify-center items-center">
        <div class="w-full max-w-md">
            @foreach ($todoIdeas as $todoIdea)
                @include('layout.shared.todo-card')
            @endforeach
            @include('layout.shared.todo-form')
        </div>
    </section>

</body>
</html>
