<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function entrada(){
        return view('sistema.entrada');
    }

    public function validar(Request $solicitud){
        dump($solicitud->all());
        $usuario = $solicitud->input('usuario');
        $password = $solicitud->input('password');
        if($usuario == $password) {
            //return redirect("http://127.0.0.1:8000/ropciones");
            return redirect(route('nopciones'));
            echo "Si se puede entrar";
        } else {
            return view('sistema.error');
            echo "No puede entrar";
        }
        
    }



    public function mopciones(){
        return view('sistema.opciones');
    }

    public function saludar(){

    }

    public function salir(Request $solicitud){
        session::forget('idioma');
        $solicitud -> session() -> forget('name');
        $solicitud -> session() -> flush();
        return redirect(route('login'));

    }
    
}
