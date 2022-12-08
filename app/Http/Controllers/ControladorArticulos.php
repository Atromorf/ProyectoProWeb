<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistroA;
use DB;
use Carbon\Carbon;

class ControladorArticulos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultArt=DB::table('tb_articulos')->get();

        return view('articulos', compact('resultArt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * desplegar la vista formulario
     */
    public function create()
    {
        $proveedores=DB::table('tb_proveedores')->get();
        return view('RegistroA', compact('proveedores'));
    }

    public function creates()
    {
        return view('RegistroAV');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * procesar el recurdo
     */
    public function store(validadorRegistroA $request)
    {
        $suma= $request->input('txtPrecioCA') + $request->input('txtPrecioCA') * 0.4;
        DB::table('tb_articulos')->insert([
            'tipo' => $request->input('txtTipo'),
            'marca' => $request->input('txtMarca'),
            'descripcion' => $request->input('txtDescripcion'),
            'cantidad' => $request->input('txtCantidadA'),
            'precioCompra' => $request->input('txtPrecioCA'),
            'precioVenta' => $suma,
            'proveedor' => $request->input('txtProvee'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('AdminU')->with('registroA', 'Comic guardado');
    }

    public function stored(validadorRegistroA $request)
    {
        $suma= $request->input('txtPrecioCA') + $request->input('txtPrecioCA') * 0.4;
        DB::table('tb_articulos')->insert([
            'tipo' => $request->input('txtTipo'),
            'marca' => $request->input('txtMarca'),
            'descripcion' => $request->input('txtDescripcion'),
            'cantidad' => $request->input('txtCantidadA'),
            'precioCompra' => $request->input('txtPrecioCA'),
            'precioVenta' => $suma,
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('VendeU')->with('registroAV', 'Articulo guardado');
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
    public function update(validadorRegistroA $request, $id)
    {
        $suma= $request->input('txtPrecioCA') + $request->input('txtPrecioCA') * 0.4;
        DB::table('tb_articulos')->where('idArticulo', $id)->update([
            'tipo' => $request->input('txtTipo'),
            'marca' => $request->input('txtMarca'),
            'descripcion' => $request->input('txtDescripcion'),
            'cantidad' => $request->input('txtCantidadA'),
            'precioCompra' => $request->input('txtPrecioCA'),
            'precioVenta' => $suma,
            'updated_at' => Carbon::now(),
        ]);
        return redirect('articulos/comics')->with('actualis', 'Comic actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_articulos')->where('idArticulo', $id)->delete();
        return redirect('articulos/comics')->with('confima', 'Recuerdo eliminado');
    }
}
