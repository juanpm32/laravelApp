<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('convertidor.procesar') }}" method="post">
        @csrf 
        Monto en Soles
        <input type="number" name="monto" /><br/>
        Convertir a:
        <select name="moneda">
            <option value="D">Dolares</option>
            <option value="E">Euros</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>