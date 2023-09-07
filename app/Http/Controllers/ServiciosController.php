<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    function index(){
        return view('servicios/index');
    }

    function detalle($vista){ // $vista puede tener el valor de servicio1, servicio2 o servicio3
        return view("servicios/detalle/$vista");
    }

}
