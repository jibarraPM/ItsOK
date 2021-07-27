<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoriaLocalController;
use App\Http\Controllers\CategoriaGlobalController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AgregadoController;
use App\Http\Controllers\Usuario\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::group([
    'middleware' => ['auth', 'desarrollador'],
    'prefix' => 'desarrollador'
], function ($router) {
    Route::get('/', 'App\Http\Controllers\Desarrollador\DesarrolladorController@dashboard_1');
    Route::get('/dashboard', 'App\Http\Controllers\Desarrollador\DesarrolladorController@dashboard_1');
    Route::get('productos_local', 'App\Http\Controllers\Desarrollador\DesarrolladorController@productos_local');
    Route::get('perfil_desarrollo', 'App\Http\Controllers\Desarrollador\DesarrolladorController@perfil_desarrollo');
    Route::get('menu_mostrar', 'App\Http\Controllers\Desarrollador\DesarrolladorController@menu_mostrar');
    Route::get('index_local', 'App\Http\Controllers\Desarrollador\DesarrolladorController@index_local');
    Route::get('editar_producto', 'App\Http\Controllers\Desarrollador\DesarrolladorController@editar_producto');
    Route::get('atenciones_lista', 'App\Http\Controllers\Desarrollador\DesarrolladorController@atenciones_lista');
    Route::get('atenciones_local_lista', 'App\Http\Controllers\Desarrollador\DesarrolladorController@atenciones_local_lista');
    Route::get('categorias_local_lista', 'App\Http\Controllers\Desarrollador\DesarrolladorController@categorias_local_lista');
    Route::get('categorias_global_lista', 'App\Http\Controllers\Desarrollador\DesarrolladorController@categorias_global_lista');
    Route::get('clientes_lista', 'App\Http\Controllers\Desarrollador\DesarrolladorController@clientes_lista');
    Route::get('admin_register', 'App\Http\Controllers\Desarrollador\DesarrolladorController@admin_register');


    




    //Rutas de restaurante controller
    Route::resource('restaurante', RestauranteController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('cliente', MenuController::class);
    Route::resource('categoria_local', CategoriaLocalController::class);
    Route::resource('categoria_global', CategoriaGlobalController::class);
    Route::resource('pedido', PedidoController::class);
    Route::resource('agregado', AgregadoController::class);
    Route::get('/recibo', 'App\Http\Controllers\Desarrollador\DesarrolladorController@recibo');

});

Route::group([
    'middleware' => ['auth', 'administrador'],
    'prefix' => 'administrador'
], function ($router) {
    Route::get('/', 'App\Http\Controllers\Administrador\AdministradorController@dashboard_1');
    Route::get('/dashboard', 'App\Http\Controllers\Administrador\AdministradorController@dashboard_1');   
});

Route::group([
    'middleware' => ['auth', 'usuario'],
    'prefix' => 'usuario'
], function ($router) {
    Route::get('/', 'App\Http\Controllers\Usuario\UsuarioController@dashboard_1');
    Route::get('/dashboard', 'App\Http\Controllers\Usuario\UsuarioController@dashboard_1');   
    
});



require __DIR__.'/auth.php';


