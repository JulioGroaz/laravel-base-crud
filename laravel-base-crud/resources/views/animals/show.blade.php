<!DOCTYPE html>
<html>
<head>
    <title>{{ $animal->name }}</title>
</head>
<body>
    <h1>{{ $animal->name }}</h1>
    <p>Species: {{ $animal->species }}</p>
    <p>Age: {{ $animal->age }}</p>
    <a href="{{ route('animals.index') }}">Back to list</a>
</body>
</html>
