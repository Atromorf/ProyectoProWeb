<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ControladorComics;
use App\Http\Controllers\ControladorArticulos;
use App\Http\Controllers\ControladorProveedores;
use App\Mail\PedidosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ControladorPedidos;
use App\Http\Controllers\VentasController;

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
//login user
Route::get('/login', [SessionController::class, 'create'])->name('login.index');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
//registro user
Route::post('/Registro', [RegisterController::class, 'store'])->name('register.store');
Route::get('/Registro', [RegisterController::class, 'create'])->name('register.create');
//comics
Route::get('articulos/comics', [ControladorComics::class, 'index'])->name('artic.index');
Route::get('comics/create', [ControladorComics::class, 'create'])->name('comics.create');
Route::post('comics/strore', [ControladorComics::class, 'store'])->name('comics.store');
//comics2
Route::get('articulosv/comicsv', [ControladorComics::class, 'indi'])->name('articv.index');
Route::get('comicsv/create', [ControladorComics::class, 'created'])->name('comicsv.create');
Route::post('comicsv/strore', [ControladorComics::class, 'storev'])->name('comicsv.store');
//update
Route::put('comics/{id}/update', [ControladorComics::class, 'update'])->name('comic.update');
//delete
Route::delete('comics/{id}/delete', [ControladorComics::class, 'destroy'])->name('comic.destroy');
//articulos
//Route::get('articulos/art', [ControladorArticulos::class, 'index'])->name('artic.index');
Route::get('articulos/create', [ControladorArticulos::class, 'create'])->name('articulo.create');
Route::post('articulos/strore', [ControladorArticulos::class, 'store'])->name('articulo.store');
//articulos2
Route::get('articulosv/create', [ControladorArticulos::class, 'creates'])->name('articulov.create');
Route::post('articulosv/strore', [ControladorArticulos::class, 'stored'])->name('articulov.store');
//update
Route::put('articulos/{id}/update', [ControladorArticulos::class, 'update'])->name('articulo.update');
//delete
Route::delete('articulos/{id}/delete', [ControladorArticulos::class, 'destroy'])->name('articulo.destroy');
//ventas
Route::get('ventas/comics', [ControladorComics::class, 'indiqui'])->name('ventas.index');
Route::get('ventasV/comics', [ControladorComics::class, 'indis'])->name('ventas.indis');
Route::get('carrito/{id}/ventas', [ControladorComics::class, 'cart'])->name('ventas.cart');
Route::get('carrito/{id}/ventasA', [ControladorComics::class, 'cartun'])->name('ventas.cartun');
Route::delete('carrito/{id}/delete', [ControladorComics::class, 'romper'])->name('venta.romper');
//pdf
Route::get('pedidos/pdf', [VentasController::class, 'index'])->name('pedidos.pdf');
Route::get('download-pdf', [VentasController::class, 'downloadPDF'])->name('download.pdf');
//proveedores
Route::get('proveedores/prov', [ControladorProveedores::class, 'index'])->name('prov.index');
Route::post('proveedores/strore', [ControladorProveedores::class, 'store'])->name('prov.store');
//update
Route::put('proveedores/{id}/update', [ControladorProveedores::class, 'update'])->name('prov.update');
//delete
Route::delete('proveedores/{id}/delete', [ControladorProveedores::class, 'destroy'])->name('prov.destroy');
//email
Route::get('pedidos', [ControladorPedidos::class, 'index'])->name('pedidos.index');
Route::post('pedidos/envio', [ControladorPedidos::class, 'store'])->name('pedidos.store');
Route::get('pedidos/pdf', [ControladorPedidos::class, 'PDF'])->name('pedidos.PDF');
//ticket
Route::get('ticket/pdf', [ControladorComics::class, 'PDF'])->name('ticket.PDF');
//reporte ventas
Route::get('reporte/ventas', [ControladorComics::class, 'report'])->name('reporte.report');
Route::get('reporte/pdf', [ControladorComics::class, 'PDFR'])->name('reporte.PDF');
Route::delete('reporte/{id}/delete', [ControladorComics::class, 'destruir'])->name('reporte.destruir');
Route::get('carrito/{id}/ventasV', [ControladorComics::class, 'carri'])->name('ventasV.carri');
Route::get('carrito/{id}/ventasAV', [ControladorComics::class, 'carrito'])->name('ventasV.carrito');




Route::controller(ControladorVista::class)->group(
    function () {
        Route::get('welcome', 'showWelcome')->name('/');
        //Route::get('login', 'showLogin')->name('Login');
        //Route::get('Registro', 'showRegistro')->name('reg');
        Route::get('tienda', 'showTienda')->name('tiend');
        Route::get('nosotros', 'showNosotros')->name('Nosotros');
        Route::get('AdminU', 'showAdminU')->name('adU');
        //Route::get('RegistroU', 'showRegistroU')->name('regU');
        //Route::get('articulos', 'showArticulos')->name('Arti');
        //Route::get('ventas', 'showVentas')->name('Vent');
        Route::get('proveedores', 'showProveedores')->name('Prov');
        Route::get('usuarios', 'showUsuarios')->name('Usua');
        Route::get('VendeU', 'showVendeU')->name('vendeU');
        Route::get('ventasV', 'showVentasV')->name('VentV');
        Route::get('articulosV', 'showArticulosV')->name('ArtiV');
        //Route::get('RegistroC', 'showRegistroC')->name('regC');
        Route::get('RegistroCV', 'showRegistroCV')->name('regCV');
        Route::get('RegistroP', 'showRegistroP')->name('regP');
        //Route::get('RegistroA', 'showRegistroA')->name('regA');
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



