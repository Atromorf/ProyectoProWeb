<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

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

Route::controller(ControladorVista::class)->group(
    function () {
        Route::get('welcome', 'showWelcome')->name('/');
        Route::get('login', 'showLogin')->name('Login');
        Route::get('Registro', 'showRegistro')->name('reg');
        Route::get('tienda', 'showTienda')->name('tiend');
        Route::get('nosotros', 'showNosotros')->name('Nosotros');
        Route::get('AdminU', 'showAdminU')->name('adU');
    }
);

Route::post('guardarComic', [ControladorVista::class, 'procesarComic'])->name('SaveMem');
Route::post('guardarUsuario', [ControladorVista::class, 'procesarUsuario'])->name('SaveMen');
