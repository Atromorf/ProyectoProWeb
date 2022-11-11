<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorRegistro;
use App\Http\Requests\validadorRegistroU;
use App\Http\Requests\validadorRegistroC;
use App\Http\Requests\validadorRegistroCV;
use App\Http\Requests\validadorRegistroP;
use App\Http\Requests\validadorRegistroA;

class ControladorVista extends Controller
{
    public function procesarComic(validadorLogin $req)
    {
        $usuario=$req->input('txtUsuario');
        return redirect()->route('/')->with('confirmacion', compact('usuario'));
        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();
    }

    public function procesarUsuario(validadorRegistro $req)
    {
        return redirect()->route('Login')->with('registro', 'Usuario gusrdado');
    }

    public function procesarEmpleado(validadorRegistroU $req)
    {
        return redirect()->route('adU')->with('registroU', 'Empleado gusrdado');
    }

    public function procesarArticulo(validadorRegistroC $req)
    {
        return redirect()->route('adU')->with('registroC', 'Articulo gusrdado');
    }

    public function procesarArticuloV(validadorRegistroCV $req)
    {
        return redirect()->route('vendeU')->with('registroCV', 'Articulo gusrdado');
    }

    public function procesarProveedor(validadorRegistroP $req)
    {
        return redirect()->route('adU')->with('registroP', 'Articulo gusrdado');
    }

    public function procesarArt(validadorRegistroA $req)
    {
        return redirect()->route('adU')->with('registroA', 'Articulo gusrdado');
    }

    public function procesarArtV(validadorRegistroAV $req)
    {
        return redirect()->route('vendeU')->with('registroAV', 'Articulo gusrdado');
    }

    public function showRegistroAV()
    {
        return view('RegistroAV');
    }

    public function showRegistroA()
    {
        return view('RegistroA');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function showRegistro()
    {
        return view('Registro');
    }

    public function showRegistroP()
    {
        return view('RegistroP');
    }

    public function showWelcome()
    {
        return view('welcome');
    }

    public function showTienda()
    {
        return view('tienda');
    }

    public function showNosotros()
    {
        return view('nosotros');
    }

    public function showAdminU()
    {
        return view('AdminU');
    }

    public function showRegistroU()
    {
        return view('RegistroU');
    }

    public function showArticulos()
    {
        return view('articulos');
    }

    public function showVentas()
    {
        return view('ventas');
    }

    public function showProveedores()
    {
        return view('proveedores');
    }

    public function showUsuarios()
    {
        return view('usuarios');
    }

    public function showVendeU()
    {
        return view('VendeU');
    }

    public function showVentasV()
    {
        return view('ventasV');
    }

    public function showArticulosV()
    {
        return view('articulosV');
    }

    public function showRegistroC()
    {
        return view('RegistroC');
    }

    public function showRegistroCV()
    {
        return view('RegistroCV');
    }

}