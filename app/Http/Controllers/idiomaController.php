<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class idiomaController extends Controller
{
    public function seleccionar(){
        return view("seleccionar");
    }
    public function procesar(Request $solicitud){
        $idioma = $solicitud -> input("idioma");
        Session::put('idioma',$idioma);
        //session(['idioma' => $idioma]);
        return redirect("ropciones");
    }

    public function saludar(){
        $idioma = Session::get('idioma','español');

        switch ($idioma){
            case 'frances':
                $mensaje = "bon jour";
                break;
            case 'italiano':
                $mensaje = "ciao";
                break;
            case 'ingles':
                $mensaje = "Hellow";
                break;
            default: $mensaje = "Hola";

        }
        $mensaje = $idioma . ":" . $mensaje;
        return view('saludar', compact('mensaje'));
    }

    public function despedir(){
        $idioma = Session::get('idioma','español');

        switch ($idioma){
            case 'frances':
                $mensaje = "Adieu";
                break;
            case 'italiano':
                $mensaje = "Ciao";
                break;
            case 'ingles':
                $mensaje = "Good bye";
                break;
            default: $mensaje = "Adios";

        }
        return view('despedir', compact('mensaje'));
    }

}
