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
        if($usuario == $password) echo "Si se puede entrar";
        else echo "No puede entrar";
        
    }

    public function saludar(){

    }

    public function salir(){

    }
    
}
