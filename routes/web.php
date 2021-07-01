<?php

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
    Route::get('/agregar_local', 'App\Http\Controllers\Desarrollador\DesarrolladorController@form_element');
    Route::get('/agregar_producto', 'App\Http\Controllers\Desarrollador\DesarrolladorController@agregar_producto');
    Route::get('/agregar_agregado', 'App\Http\Controllers\Desarrollador\DesarrolladorController@agregar_agregado');
    Route::get('/locales', 'App\Http\Controllers\Desarrollador\DesarrolladorController@locales');
    Route::get('/productos_local', 'App\Http\Controllers\Desarrollador\DesarrolladorController@productos_local');
    Route::get('/producto_detalle', 'App\Http\Controllers\Desarrollador\DesarrolladorController@producto_detalle');
    Route::get('/pedido', 'App\Http\Controllers\Desarrollador\DesarrolladorController@pedido');
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


