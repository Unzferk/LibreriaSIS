<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Http\Requests\ProveedorRequest;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::orderBy('nombre','ASC')->paginate(5);
        return view('formularios.proveedores.index')->with('proveedores',$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::orderBy('nombre','ASC')->paginate(5);
        return view('formularios.proveedores.create')->with('proveedores',$proveedores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorRequest $request)
    {
        $url = 'admin/proveedores/create';
        
        $proveedor = new Proveedor;
        $proveedor->codigo_prv = $request->input('codigo_prv');
        $proveedor->nombre = $request->input('nombre');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->correo = $request->input('correo');
        $proveedor->pag_web = $request->input('pag_web');
        $proveedor->fax = $request->input('fax');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->save();

        return redirect($url);

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
    public function update(Request $request)
    {

        $proveedor = Proveedor::findOrFail($request->ide);
        $proveedor->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $url = ('admin/proveedores/create');
        
        $proveedor = Proveedor::find($id);
        $proveedor->delete();

        return redirect($url);
    }
}
