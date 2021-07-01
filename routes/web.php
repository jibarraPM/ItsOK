<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AgregadoController;

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

    //Rutas de restaurante controller
    Route::resource('restaurant', RestauranteController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('pedido', PedidoController::class);
    Route::resource('agregado', AgregadoController::class);

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
    Route::get('/', 'App\Http\Controllers\Usuario\DavuradminController@app_profile');
    Route::get('/app-profile', 'App\Http\Controllers\Usuario\DavuradminController@app_profile');
});



require __DIR__.'/auth.php';


