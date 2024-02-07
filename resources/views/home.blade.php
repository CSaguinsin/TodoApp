<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>To-do app</title>
</head>
    <body>
            @extends('layout.app')

            @section('content')
                <div class="w-full h-screen flex items-center justify-center">
                        <h1>Welcome</h1>
                </div>
            @endsection
    </body>
</html>