<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
</head>
    <body>
            @extends('layout.app')

            @section('content')
            <div class="flex items-center justify-center pt-10">
                @foreach ($title as $title)
                    <h1>{{ $title['title'] }}</h1>
                @endforeach
            </div>
                <div class="flex items-center justify-center pt-10">
                    <img class="w-60 h-full " src="../assets/empty.png" />
                </div>
            @endsection
    </body>
</html>