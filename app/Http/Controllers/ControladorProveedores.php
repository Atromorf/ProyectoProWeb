<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistroP;
use DB;
use Carbon\Carbon;

class ControladorProveedores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscardon=$request->get('buscardon');
        $resultProv=DB::table('tb_proveedores')->where('empresa','like','%'.$buscardon.'%')->get();

        return view('proveedores', compact('resultProv'), compact('buscardon'));
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
    public function store(validadorRegistroP $request)
    {
        DB::table('tb_proveedores')->insert([
            'empresa' => $request->input('txtEmpresa'),
            'direccion' => $request->input('txtDireccion'),
            'pais' => $request->input('txtPais'),
            'num_fijo' => $request->input('txtNumFijo'),
            'num_celular' => $request->input('txtNumCelular'),
            'correo' => $request->input('txtCorreo'),
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('proveedores/prov')->with('prove', 'Proveedor guardado');
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
    public function update(validadorRegistroP $request, $id)
    {
        DB::table('tb_proveedores')->where('idProveedor', $id)->update([
            'empresa' => $request->input('txtEmpresa'),
            'direccion' => $request->input('txtDireccion'),
            'pais' => $request->input('txtPais'),
            'num_fijo' => $request->input('txtNumFijo'),
            'num_celular' => $request->input('txtNumCelular'),
            'correo' => $request->input('txtCorreo'),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('proveedores/prov')->with('actualis', 'Comic actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_proveedores')->where('idProveedor', $id)->delete();
        return redirect('proveedores/prov')->with('confima', 'Proveedor eliminado');
    }
}
