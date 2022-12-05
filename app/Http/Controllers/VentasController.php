<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comics;
use App\Models\Articulos;
use Barryvdh\DomPDF\Facade as PDF;
use DB;
use Carbon\Carbon;

class VentasController extends Controller
{
    public function indiqui()
    {
        $resultCom=DB::table('tb_comics')->get();
        $resultArt=DB::table('tb_articulos')->get();

        return view('ventas', compact('resultCom'), compact('resultArt'));
    }

    public function downloadPDF($id)
    {
        $resultCom=DB::table('tb_comics')->get();
        $resultArt=DB::table('tb_articulos')->get();

        view()->share('ventas.download',$resultCom, $resultArt);
        $pdf = PDF::loadView('ventas.download', ['ventas' => $venta, 'articulos' => $resultArt]);
        return $pdf->download('Ticket de compra.pdf');
    }
}
