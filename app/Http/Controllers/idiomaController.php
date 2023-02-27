<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class idiomaController extends Controller
{
    public function seleccionar(){
        return view("seleccionar");
    }
    public function procesar(Request $solicitud){
        $idioma = $solicitud -> input("idioma");

        session(['idioma' => $idioma]);
        return redirect("ropciones");
    }

    public function saludar(){
        $idioma = session('idioma','español');

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
        return view('saludar', compact('mensaje'));
    }

    public function despedir(){
        $idioma = session('idioma','español');

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
        return view('saludar', compact('mensaje'));
    }

}
