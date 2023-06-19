<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nuevaVistaController;

use Illuminate\Http\Request;

use App\Http\Controllers\productoController;
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

Route::get('/', function () {
    return view('welcomesi');
});

//ruta para enviar mensajes por URL
Route::get('/nuevo', function(){
    return "Hola";
});
//Primero la ruta y despues la vista
Route::view('/vistanew','/new/nuevaVista');

//Ruta para enviar parametros por medio de las rutas
Route::view('vistanew',
'/new/nuevaVista',
['nombreVariable'=>'PuntoVenta']);

//Ruta que llama una vista por medio de un controlador
Route::get('/rutaController',[nuevaVistaController::class, 'index']);

//Ruta para recibir parametros en URL
Route::get(
    '/vista1',function(Request $request){
        return "El Id recibido es: ".$request->get('id');
    });

// Ruta para recibir parametros por medio del controlador
Route::get('/parametros/{id}',[nuevaVistaController::class, 'recibirParametros']);


//grupo de rotas desde la vista

Route::prefix('ruta')->group(function(){
    Route::name('ruta.')->group(function(){
        Route::get('/productos', function(){
            return view('/new/nuevaVista',['nombreVariable'=>'PuntoVenta']); 
        })->name('productos');

        Route::get('/productos/create',[nuevaVistaController::class, 'create'])->name('productos.create');

        Route::get('/productos/show',[nuevaVistaController::class, 'show'])->name('productos.show');
        
        Route::get('/productos/edit',[nuevaVistaController::class, 'edit'])->name('productos.edit');
        
        Route::get('/productos/destroy',[nuevaVistaController::class, 'destroy'])->name('productos.destroy');

    });
});


Auth::routes();
Route::group(['middleware'=>['auth']],function(){
    Route::resource('productos', productoController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
