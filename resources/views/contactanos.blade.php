<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
</head>
<body>
    <h1>Contactanos</h1>
    <ul>
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
        <li><a href="{{ route('servicios') }}">Servicios</a></li>
        <li><a href="{{ route('contactanos') }}">Contactanos</a></li>
    </ul>
    <hr>
    <form method="post" action="{{ route('contactanos.respuesta') }}">
        @csrf
        <input type="text" name="nombre" placeholder="Ingrese su nombre" required />
        <br/> 
        <input type="email" name="email" placeholder="Ingrese su email" required />
        <br/>
        <select name="servicio" required>
            <option value="">Seleccione un servicio</option>
            <option value="DE">Desarrollo web</option>
            <option value="DI">Diseño web</option>
        </select>
        <br/>
        Horario de contacto:
        <br/>
        <input type="radio" name="horario" value="9-11" checked/>En la mañana (9am a 12pm) <br/>
        <input type="radio" name="horario" value="11-1" />En la mañana (11am a 1pm) <br/>
        <input type="radio" name="horario" value="2-6" />En la tarde (2pm a 6pm) <br/>
        Dia de contacto:
        <br/>
        <input type="radio" name="dias" value="L-V" checked/>Lunes a Viernes <br/>
        <input type="radio" name="dias" value="S" />Sabado <br/>
        Porque medio nos conoció:
        <br/>
        <input type="checkbox" name="medio[]" value="google" /> Google <br/>
        <input type="checkbox" name="medio[]" value="tv" /> Televisión <br/>
        <input type="checkbox" name="medio[]" value="radio" /> Radio <br/>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>