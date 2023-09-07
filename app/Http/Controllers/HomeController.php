<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function index(){
        return view('inicio');
    }

    function nosotros(){
        return view('nosotros');
    }

    function contactanos(){
        return view('contactanos');
    }

    function respuesta(Request $request){
        dd($request->all());
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $servicio = $request->input('servicio');
        $horario = $request->input('horario');
        $dias = $request->input('dias');
        $medio = $request->input('medio');

        /*echo "nombre: $nombre<br/>";
    	echo "email: $email<br/>";
    	echo "servicio: $servicio<br/>";
    	echo "horario de contacto: $horario<br/>";
    	echo "dia de contacto: $dias<br/>";
    	foreach($medio as $med){
            echo "medio de contacto: $med<br/>";
        }*/

    }

}
