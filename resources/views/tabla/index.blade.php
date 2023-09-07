<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tabla</h1>
	<form action="{{ route('tabla.procesar') }}" method="post">
    	@csrf
    	Ingresa un número:
    	<input type="number" name="numero" /><br/>
    	<button type="submit">Convertir Monto</button>
	</form>

</body>
</html>