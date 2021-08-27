<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;

use App\Http\Controllers\Administrador\RestauranteAdminController;
use App\Http\Controllers\Administrador\MenuAdminController;
use App\Http\Controllers\Administrador\AgregadoAdminController;
use App\Http\Controllers\Administrador\CategoriaLocalAdminController;
use App\Http\Controllers\Administrador\AtencionAdminController;
use App\Http\Controllers\Administrador\UsuarioAdminController;

use App\Http\Controllers\Desarrollador\RestauranteDevController;
use App\Http\Controllers\Desarrollador\MenuDevController;
use App\Http\Controllers\Desarrollador\CategoriaLocalDevController;
use App\Http\Controllers\Desarrollador\CategoriaGlobalDevController;
use App\Http\Controllers\Desarrollador\AtencionDevController;
use App\Http\Controllers\Desarrollador\AgregadoDevController;
use App\Http\Controllers\Desarrollador\UsuarioDevController;

use App\Http\Controllers\Usuario\RestauranteUserController;
use App\Http\Controllers\Usuario\MenuUserController;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoriaLocalController;
use App\Http\Controllers\CategoriaGlobalController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AgregadoController;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Usuario\CartController;

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

    Route::resource('restauranteD', RestauranteDevController::class);

    Route::resource('restauranteD/{id}/menuD', MenuDevController::class);
    Route::resource('restauranteD/{id}/categoriaLocalD', CategoriaLocalDevController::class);
    Route::resource('restauranteD/{id}/atencionD', AtencionDevController::class);

    Route::resource('menuD', MenuDevController::class);
    Route::resource('categoriaLocalD', CategoriaLocalDevController::class);
    Route::resource('categoriaGlobalD', CategoriaGlobalDevController::class);
    Route::resource('atencionD', AtencionDevController::class);
    Route::resource('agregadoD', AgregadoDevController::class);
    Route::resource('usuarioD', UsuarioDevController::class);
    
    

    /*

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


    */

    
   
    
    Route::get('/recibo', 'App\Http\Controllers\Desarrollador\DesarrolladorController@recibo');

});

Route::group([
    'middleware' => ['auth', 'administrador'],
    'prefix' => 'administrador'
], function ($router) {

    Route::get('/', 'App\Http\Controllers\Administrador\AdministradorController@dashboard_1');

    Route::resource('menuA', MenuAdminController::class);
    Route::resource('agregadoA', AgregadoAdminController::class);
    Route::resource('categoriaLocalA', CategoriaLocalAdminController::class);
    Route::resource('atencionA', AtencionAdminController::class);
    Route::resource('usuarioA', UsuarioAdminController::class);

    Route::resource('restaurante', RestauranteAdminController::class);
    
    Route::get('/dashboard', 'App\Http\Controllers\Administrador\AdministradorController@dashboard_1');  

    Route::get('/locales', 'App\Http\Controllers\Administrador\AdministradorController@index_local');

    Route::get('/menus', 'App\Http\Controllers\Administrador\AdministradorController@menus_lista');

});

Route::group([
    'middleware' => ['auth', 'usuario'],
    'prefix' => 'usuario'
], function ($router) {

    Route::resource('restaurante', RestauranteUserController::class);
    Route::resource('menu', MenuUserController::class);
    Route::resource('cart', CartController::class);

    Route::get('/atencion', 'App\Http\Controllers\Usuario\UsuarioController@atencion');
    Route::get('/recibo', 'App\Http\Controllers\Usuario\UsuarioController@recibo');


    Route::get('/', 'App\Http\Controllers\Usuario\UsuarioController@dashboard_1');
    Route::get('/dashboard', 'App\Http\Controllers\Usuario\UsuarioController@dashboard_1');   
    
});



require __DIR__.'/auth.php';


