<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertidorController extends Controller
{
    function index(){
        return view('convertidor/index');
    }

    function procesar(Request $request){
        $monto = $request->monto;
        $moneda = $request->moneda;

        /*if($moneda=="D"){
            $convertido = $monto * 4.71;
        }else{
            $convertido = $monto * 3.86;
        }*/

        $convertido = ($moneda=="D") ? $monto * 4.71 : $monto * 3.86;

        $resultado = number_format($convertido,5);

        $datos = [
            'monto' => $monto,
            'moneda' => $moneda,
            'resultado' => $resultado,
        ];

        
        return view('convertidor/resultado',$datos);
    }
}
