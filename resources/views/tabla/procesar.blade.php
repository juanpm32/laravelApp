<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla del {{ $numero }}</h1>
    <ul>
        @for ($i = 1; $i <= 12; $i++)
            <li>{{ $numero }} * {{ $i }} = {{ $numero*$i }}</li>
        @endfor
    </ul>
</body>
</html>