<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SistemaController extends Controller
{
    public function entrada(){
        return view('sistema.entrada');
    }

    public function validar(Request $solicitud){

        $usuario = $solicitud->input('usuario');
        $password = $solicitud->input('password');
        
        if($usuario == $password) {
            return redirect(route('nopciones'));
        } else {
            return view('sistema.error');
        }
        
    }



    public function mopciones(){
        return view('sistema.opciones');
    }

    public function saludar(){

    }

    public function salir(Request $solicitud){
        Session::forget('idioma');
        Session::flush();
        return view("welcome");
    }
    
}
