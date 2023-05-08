<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi - Home</title>
    {{-- css --}}
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
</head>
<body>

    <nav>
        <ul>
            @foreach ($links as $link) 
                <li><a href="{{route($link)}}">{{ $link }}</a></li>
            @endforeach
        </ul>
    </nav>

    <h1> {{ $greeting }} </h1>

</body>
</html>