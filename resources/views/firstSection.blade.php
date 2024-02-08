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
        @section('content')
        <div class="lg:flex lg:items-center lg:justify-center sm:flex-col">
            @foreach ($landingTitle as $landingTitle)
                <h1 class="landingTitle pt-10 text-center">{{ $landingTitle['title'] }}</h1>
            @endforeach
            <div class="lg:w-1/2">
                @foreach ($landingDescription as $landingDescription)
                    <p class="description text-center">{{ $landingDescription['description'] }}</p>
                @endforeach
            </div>
            <div class=" flex justify-center">
                <img src="{{ asset('assets/LandingGraphic.png') }}" alt="landing graphic" class="graphic mx-auto flex justify-center ">
            </div>

            <button
                class="mx-auto flex justify-center cursor-pointer transition-all bg-blue-500 text-white px-6 py-2 rounded-lg
                border-blue-600
                border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px]
                active:border-b-[2px] active:brightness-90 active:translate-y-[2px]">
                <a href="/todo" >
                Start Now!
                </a>
            </button>
        </div>
        @endsection



    </body>
</html>
