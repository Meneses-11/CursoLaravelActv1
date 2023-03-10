<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\idiomaController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
Route::get('/',[SistemaController::class,'entrada']);

Route::post('/validar',[SistemaController::class,'validar']);
*/

//Route::get('/',[SistemaController::class, 'entrada']);
Route::post('validar',[SistemaController::class,'validar'])->name('validar');
Route::get('ropciones',[SistemaController::class, 'mopciones'])->name('nopciones');
Route::get('login',[SistemaController::class,'entrada'])->name('login');
Route::get('seleccionar',[idiomaController::class, 'seleccionar'])->name('seleccionar');
Route::post('procesar',[idiomaController::class, 'procesar'])->name('procesar');
Route::get('saludar',[idiomaController::class, 'saludar'])->name('saludar');
Route::get('despedir',[idiomaController::class, 'despedir'])->name('despedir');

Route::get('salir',[SistemaController::class, 'salir'])->name('salir');



/*
Route::post('procesar', function(Request $r){
    $idioma = $r -> input('idioma');
    switch($idioma){
        case 'español':
            return view('saludos.español');
            break;
        case 'frances':
            return view('saludos.frances');
            break;
        case 'italiano':
            return view('saludos.italiano');
            break;
        default: 
            echo 'Disculpa, ese idioma no hablo';
            break;
    }
})->name('otro');
Route::get('saludo/{nombre?}', function($nombre=null){
    return view('saludos.español',compact('nombre'));
})->name('r1');
Route::get('salutare/{nombre?}', function($nombre=null){
    return view('saludos.italiano')->with('nombre',$nombre);
})->name('r2');
Route::get('saluer/{nombre?}', function($nombre=null){
    return view('saludos.frances',compact('nombre'));
})->name('r3');
*/
