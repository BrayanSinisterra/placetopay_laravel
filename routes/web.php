<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [OrderController::class, 'index']);
Route::resource('order', OrderController::class);
/*
|--------------------------------------------------------------------------
| Rutas Controllador Placetopay
|--------------------------------------------------------------------------
|
 */

Route::get('placetopay/{id}', [ApiController::class, 'placetopay']);
Route::get('show/{id}', [ApiController::class, 'show']);

/*
|--------------------------------------------------------------------------
| Función de error
|--------------------------------------------------------------------------
| Sí uno de los servicios tiende a fallar envia un mensaje comercial
 */
Route::get('/error', function () {
    return view('error');
});
