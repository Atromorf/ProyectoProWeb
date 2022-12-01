<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistroP;
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
        return view('RegistroA');
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
        DB::table('tb_articulos')->insert([
            'tipo' => $request->input('txtTipo'),
            'marca' => $request->input('txtMarca'),
            'descripcion' => $request->input('txtDescripcion'),
            'cantidad' => $request->input('txtCantidadA'),
            'precioCompra' => $request->input('txtPrecioCA'),
            'precioVenta' => $request->input('txtPrecioVA'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('AdminU')->with('registroA', 'Comic guardado');
    }

    public function stored(validadorRegistroA $request)
    {
        DB::table('tb_articulos')->insert([
            'tipo' => $request->input('txtTipo'),
            'marca' => $request->input('txtMarca'),
            'descripcion' => $request->input('txtDescripcion'),
            'cantidad' => $request->input('txtCantidadA'),
            'precioCompra' => $request->input('txtPrecioCA'),
            'precioVenta' => $request->input('txtPrecioVA'),
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
        DB::table('tb_articulos')->where('idArticulo', $id)->update([
            'tipo' => $request->input('txtTipo'),
            'marca' => $request->input('txtMarca'),
            'descripcion' => $request->input('txtDescripcion'),
            'cantidad' => $request->input('txtCantidadA'),
            'precioCompra' => $request->input('txtPrecioCA'),
            'precioVenta' => $request->input('txtPrecioVA'),
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
