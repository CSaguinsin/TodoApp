<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@section('secondSection')

    <div>
        @foreach ($secondPart as $part)
            <h1 class="landingTitle pt-20 text-center">{{ $part['title'] }}</h1>
        @endforeach
    </div>

    <section class="container  mx-auto">
        <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between">
            <div class="lg:w-1/2 lg:mr-6  lg:ml-6">
                @foreach ($secondPart as $part)
                    <p class="seconddescription">{{ $part['description'] }}</p>
                @endforeach
            </div>
            <div>
                <img src={{ asset('assets/secondSectionGraphic.png') }} alt="secondSection" class="graphic flex justify-center">
            </div>
        </div>
    </section>


@endsection
</body>
</html>
