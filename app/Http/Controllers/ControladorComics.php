<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistroC;
use DB;
use Carbon\Carbon;

class ControladorComics extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultCom=DB::table('tb_comics')->get();
        $resultArt=DB::table('tb_articulos')->get();

        return view('articulos', compact('resultCom'), compact('resultArt'));
    }

    public function indi()
    {
        $resultCom=DB::table('tb_comics')->get();
        $resultArt=DB::table('tb_articulos')->get();

        return view('articulosV', compact('resultCom'), compact('resultArt'));
    }

    public function indiqui()
    {
        $resultCom=DB::table('tb_comics')->get();
        $resultArt=DB::table('tb_articulos')->get();

        return view('ventas', compact('resultCom'), compact('resultArt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * desplegar la vista formulario
     */
    public function create()
    {
        return view('RegistroC');
    }

    public function created()
    {
        return view('RegistroCV');
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
            'precioVenta' => $request->input('txtPrecioV'),
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
}
