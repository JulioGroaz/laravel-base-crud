<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>base-grud</title>
    @vite('resources/js/app.js')
</head>
<body>

    <h1>Animals</h1>
    <ul>
        @foreach ($animals as $animal)
            <li>
                <a href="{{ route('animals.show', $animal->id) }}">{{ $animal->name }}</a>
            </li>
        @endforeach
    </ul>


</body>
</html>
