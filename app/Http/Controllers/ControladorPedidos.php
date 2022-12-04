<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PedidosMailable;
use Illuminate\Support\Facades\Mail;
use DB;
use Carbon\Carbon;

class ControladorPedidos extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }

    public function store(Request $request)
    {
        $correo = new PedidosMailable($request->all());
        Mail::to('andrfonsecaaguilera@yahoo.com.mx')->send($correo);
        return redirect('AdminU')->with('pedidos', 'Pedido enviado');
    }
}
