<?php

use Illuminate\Support\Facades\Route;
//llamamos a todos los controladores que usaremos
use App\http\Controllers\UsuariosController; 
use App\http\Controllers\ProductoController; 
use App\http\Controllers\HenriController; 


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
    return view('welcome');

});

route::get('/usuarios', function() {
    return "aqui van los usuarios";
});

route::get('/usuarios2',
    [UsuariosController::class, 'listar']
);

route::get('/productos',
    [ProductoController::class, 'listar']
);

route::get('/henri',
    [HenriController::class, 'listar']
);