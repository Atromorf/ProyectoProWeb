<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorRegistro;

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

    public function showLogin()
    {
        return view('login');
    }

    public function showRegistro()
    {
        return view('Registro');
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

}