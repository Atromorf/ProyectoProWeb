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
        Route::get('RegistroU', 'showRegistroU')->name('regU');
        Route::get('articulos', 'showArticulos')->name('Arti');
        Route::get('ventas', 'showVentas')->name('Vent');
        Route::get('proveedores', 'showProveedores')->name('Prov');
        Route::get('usuarios', 'showUsuarios')->name('Usua');
        Route::get('VendeU', 'showVendeU')->name('vendeU');
        Route::get('ventasV', 'showVentasV')->name('VentV');
        Route::get('articulosV', 'showArticulosV')->name('ArtiV');
        Route::get('RegistroC', 'showRegistroC')->name('regC');
        Route::get('RegistroCV', 'showRegistroCV')->name('regCV');
        Route::get('RegistroP', 'showRegistroP')->name('regP');
        Route::get('RegistroA', 'showRegistroA')->name('regA');
        Route::get('RegistroAV', 'showRegistroAV')->name('regAV');
    }
);

Route::post('guardarComic', [ControladorVista::class, 'procesarComic'])->name('SaveMem');
Route::post('guardarUsuario', [ControladorVista::class, 'procesarUsuario'])->name('SaveMen');
Route::post('guardarEmpleado', [ControladorVista::class, 'procesarEmpleado'])->name('SaveMin');
Route::post('guardarArticulo', [ControladorVista::class, 'procesarArticulo'])->name('SaveMim');
Route::post('guardarArticuloV', [ControladorVista::class, 'procesarArticuloV'])->name('SavMim');
Route::post('guardarProveedor', [ControladorVista::class, 'procesarProveedor'])->name('SavMimi');
Route::post('guardarArt', [ControladorVista::class, 'procesarArt'])->name('SavMimin');
Route::post('guardarArtV', [ControladorVista::class, 'procesarArtV'])->name('SavMimir');



