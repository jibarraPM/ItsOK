<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\MenuController;
use App\Http\Controllers\API\RestauranteController;
use App\Http\Controllers\API\AgregadoController;
use App\Http\Controllers\API\AtencionController;
use App\Http\Controllers\API\MesaController;
use App\Http\Controllers\API\TarjetaController;
use App\Http\Controllers\API\CategoriaGlobalController;
use App\Http\Controllers\API\CategoriaLocalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, "login"]);
    Route::post('logout', [AuthController::class, "logout"]);
    Route::post('refresh', [AuthController::class, "refresh"]);
    Route::post('me', [AuthController::class, "me"]);
});

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::resource('menus', MenuController::class);
    Route::resource('restaurantes', RestauranteController::class);
    Route::resource('agregados', AgregadoController::class);
    Route::resource('atenciones', AtencionController::class);
    Route::resource('mesas', MesaController::class);
    Route::resource('tarjetas', TarjetaController::class);
    Route::resource('categoriaGlobal', CategoriaGlobalController::class);
    Route::resource('categoriaLocal', CategoriaLocalController::class);
    Route::post('webpayplus/create/', 'App\Http\Controllers\API\WebpayPlusController@createdTransaction');
});