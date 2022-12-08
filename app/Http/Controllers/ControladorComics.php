<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistroC;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use PDF;

class ControladorComics extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $proveedores=DB::table('tb_proveedores')->get();
        $resultCom=DB::table('tb_comics')->where('nombre','like','%'.$buscarpor.'%')->get();
        $resultArt=DB::table('tb_articulos')->where('tipo','like',"%$buscarpor%")->get();
        if(is_null($resultCom) && is_null($resultArt))
        {
            return redirect('articulos/comics',compact('resultCom'), compact('resultArt'), compact('buscarpor'), compact('proveedores'))->with('busca','No se ha encontrado el articulo');
        } else {
            return view('articulos',compact('resultCom'), compact('resultArt'), compact('buscarpor'), compact('proveedores'));
        }
    }

    public function cart($id)
    {
        $resultCom=DB::table('tb_comics')->where('idComic',$id)->get();
        DB::table('tb_ventas')->insert([
            'nombre' => $resultCom[0]->nombre,
            'tipo' => $resultCom[0]->edicion,
            'precio' => $resultCom[0]->precioVenta,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tb_carrito')->insert([
            'producto' => $resultCom[0]->nombre,
            'precioVenta' => $resultCom[0]->precioVenta,
            'proveedor' => $resultCom[0]->proveedor,
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('articulos/comics')->with('cart', 'Comic guardado');
    }

    public function cartun($id)
    {
        $resultArt=DB::table('tb_articulos')->where('idArticulo',$id)->get();
        DB::table('tb_ventas')->insert([
            'nombre' => $resultArt[0]->tipo,
            'tipo' => $resultArt[0]->marca,
            'precio' => $resultArt[0]->precioVenta,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('tb_carrito')->insert([
            'producto' => $resultArt[0]->tipo,
            'precioVenta' => $resultArt[0]->precioVenta,
            'proveedor' => $resultArt[0]->proveedor,
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('articulos/comics')->with('cartun', 'Articulo guardado');
    }

    public function indi(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $resultCom=DB::table('tb_comics')->where('nombre','like','%'.$buscarpor.'%')->get();
        $resultArt=DB::table('tb_articulos')->where('tipo','like',"%$buscarpor%")->get();
        if ($resultCom->count()>0) {
            return view('articulosV',compact('resultCom'), compact('resultArt'), compact('buscarpor'))->with('busca','No se ha encontrado el articulo');
        }else{
            return view('articulosV',compact('resultCom'), compact('resultArt'), compact('buscarpor'));
        }
    }

    public function indiqui(Request $request)
    {
        $buscason=$request->get('buscason');
        $ventas=DB::table('tb_ventas')->where('nombre','like','%'.$buscason.'%')->get();
        return view('ventas',compact('ventas'), compact('buscason'));
    }

    public function report(Request $request)
    {
        $buscarcuan=$request->get('buscarcuan');
        $reportVent=DB::table('tb_carrito')->where('fecha','like','%'.$buscarcuan.'%')->get();
        return view('reporte',compact('reportVent'), compact('buscarcuan'));
    }

    public function indis(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $resultCom=DB::table('tb_comics')->where('nombre','like','%'.$buscarpor.'%')->get();
        $resultArt=DB::table('tb_articulos')->where('tipo','like',"%$buscarpor%")->get();
        if ($resultCom->count()>0) {
            return view('ventasV',compact('resultCom'), compact('resultArt'), compact('buscarpor'))->with('busca','No se ha encontrado el articulo');
        }else{
            return view('ventasV',compact('resultCom'), compact('resultArt'), compact('buscarpor'));
        }
    }

    //agregar articulos al carrito

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * desplegar la vista formulario
     */
    public function create()
    {
        $proveedores=DB::table('tb_proveedores')->get();
        return view('RegistroC', compact('proveedores'));
    }

    public function created()
    {
        return view('RegistroCV');
    }

    public function ticket()
    {
        return view('ticket');
    }

    public function PDF()
    {
        $ventas=DB::table('tb_ventas')->get();
        $pdf =PDF::loadView('ticket', compact("ventas"));
        return $pdf->stream('Ticket.pdf');

    }

    public function reporteV()
    {
        return view('reportPDF');
    }

    public function PDFR()
    {
        $reporteVent=DB::table('tb_carrito')->get();
        $pdf =PDF::loadView('reportPDF', compact("reporteVent"));
        return $pdf->stream('Reporte.pdf');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * procesar el recurdo
     */
    public function store(validadorRegistroC $request)
    {
        $suma= $request->input('txtPrecioC') + $request->input('txtPrecioC') * 0.4;
        DB::table('tb_comics')->insert([
            'nombre' => $request->input('txtComic'),
            'edicion' => $request->input('txtEdicion'),
            'compañia' => $request->input('txtCompañia'),
            'cantidad' => $request->input('txtCantidad'),
            'precioCompra' => $request->input('txtPrecioC'),
            'precioVenta' => $suma,
            'proveedor' => $request->input('txtProveedor'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('AdminU')->with('registroC', 'Comic guardado');
    }

    public function storev(validadorRegistroC $request)
    {
        $suma= $request->input('txtPrecioC') + $request->input('txtPrecioC') * 0.4;
        DB::table('tb_comics')->insert([
            'nombre' => $request->input('txtComic'),
            'edicion' => $request->input('txtEdicion'),
            'compañia' => $request->input('txtCompañia'),
            'cantidad' => $request->input('txtCantidad'),
            'precioCompra' => $request->input('txtPrecioC'),
            'precioVenta' => $suma,
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('VendeU')->with('registroCV', 'Comic guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorRegistroC $request, $id)
    {
        $suma= $request->input('txtPrecioC') + $request->input('txtPrecioC') * 0.4;
        DB::table('tb_comics')->where('idComic', $id)->update([
            'nombre' => $request->input('txtComic'),
            'edicion' => $request->input('txtEdicion'),
            'compañia' => $request->input('txtCompañia'),
            'cantidad' => $request->input('txtCantidad'),
            'precioCompra' => $request->input('txtPrecioC'),
            'precioVenta' => $suma,
            'updated_at' => Carbon::now(),
        ]);
        return redirect('articulos/comics')->with('actual', 'Comic actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_comics')->where('idComic', $id)->delete();
        return redirect('articulos/comics')->with('confirma', 'Recuerdo eliminado');
    }

    public function romper($id)
    {
        DB::table('tb_ventas')->where('idVentas', $id)->delete();
        return redirect('ventas/comics')->with('confina', 'Producto eliminado');
    }

    public function destruir($id)
    {
        DB::table('tb_carrito')->where('idCarrito', $id)->delete();
        return redirect('reporte/ventas')->with('elimi', 'Producto eliminado');
    }
}
