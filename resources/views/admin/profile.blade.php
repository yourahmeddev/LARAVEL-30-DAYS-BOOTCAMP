<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($name)
    <h1>Hello {{ $name }}</h1>
    @else
    <h1>Missing Parmeters</h1>
    @endif
    {{-- for each loop --}}
    {{-- @foreach ($collections as $col)
    {{ $col }}
    @endforeach --}}
</body>
</html>