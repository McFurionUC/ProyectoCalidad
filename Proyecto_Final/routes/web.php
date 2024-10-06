<?php

use App\Http\Controllers\controlador_1;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\TesisController;
use App\Http\Controllers\PracticaReto;
use App\Http\Controllers\SustentacionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function(){
    return redirect()->route('login');
});

Route::controller(PracticaReto::class)->group(function()
{
    Route::get("reto", [PracticaReto::class,'index']);
    Route::get("reto/create", [PracticaReto::class,'create']);
    Route::get("reto/{procedimiento}", [PracticaReto::class,'show']);
    Route::get("reto/registro/{procedimiento}/{registro?}", [PracticaReto::class,'registro']);
    Route::get("reto/control/{procedimiento}/{control?}", [PracticaReto::class,'control']);
});

Route::controller(PracticaController::class)->group(function()
{
    Route::get('practicas',[PracticaController::class,'index']);
    Route::get('practicas/create',[PracticaController::class,'create']);
    Route::get('practicas/{procedimiento}',[PracticaController::class,'show']);

});

Route::controller(SustentacionController::class)->group(function() {
    Route::get('grados_titulos/sustentacion','index')->name('grados_titulos.sustentacion.index');
    Route::get('grados_titulos/sustentacion/create','create')->name('grados_titulos.sustentacion.create');
    Route::post('grados_titulos/sustentacion','store')->name('grados_titulos.sustentacion.store');
    Route::get('grados_titulos/sustentacion/{sustentacion}', 'show')->name('grados_titulos.sustentacion.show');


    Route::get('grados_titulos/sustentacion/{sustentacion}/edit','edit') ->name('grados_titulos.sustentacion.edit');
    
    Route::put('grados_titulos/sustentacion/{sustentacion}/update','update')->name('grados_titulos.sustentacion.update');

    //ruta delete 
    Route::delete('grados_titulos/sustentacion/{sustentacion}', 'destroy')->name('grados_titulos.sustentacion.destroy');
});

Route::controller(TesisController::class)->group(function()
{
 
 Route::get('grados_titulos/tesis','index')->name('grados_titulos.tesis.index');
 Route::get('grados_titulos/tesis/create','create')->name('grados_titulos.tesis.create');  
 
  //ruta formulario
  Route::post('grados_titulos/tesis','store')->name('grados_titulos.tesis.store');

 Route::get('grados_titulos/tesis/{tesis}','show')->name('grados_titulos.tesis.show');

 Route::get('grados_titulos/tesis/{tesis}/edit','edit') ->name('grados_titulos.tesis.edit');
    
    Route::put('grados_titulos/tesis/{tesis}/update','update')->name('grados_titulos.tesis.update');

    //ruta delete 
    Route::delete('grados_titulos/tesis/{tesis}', 'destroy')->name('grados_titulos.tesis.destroy');


 
});




/*

Route::get('practicas', function(){
    return "Practicas: ruta";
});

Route::get("practicas/{procedimiento}/{registro?}", function($procedimiento,$registro){
    if($registro)
    {
        echo "Bienvenido: $registro al procedimiento: $procedimiento";
    }
    else
    {
        echo"Bienvenido al procedimiento: $procedimiento";
    }
});

*/