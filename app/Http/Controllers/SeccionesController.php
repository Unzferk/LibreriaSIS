<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Seccion;
use App\Http\Requests\SeccionRequest; 
use Excel;
use Illuminate\Support\Facades\Input;

class SeccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $secciones = Seccion::orderBy('nombre','ASC')->paginate(5);
        return view('formularios.secciones.create')->with('secciones',$secciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = ('admin/secciones/create');

        $rules = array(
         'nombre' => 'required|string|unique:seccion,nombre|min:3|max:60',
         'descripcion' => 'max:140'
        ); 
        $messages = array(
          'nombre.required' => 'El campo es obligatorio',
          'nombre.string' => 'Solo se permite letras',
          'nombre.unique' => 'Este nombre ya existe',
          'descripcion' => 'Solo se permite 140 carateres'
        );

        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect($url)->withErrors($validator);
        } else if($validator->passes()) {
            $seccion = new Seccion;
            $seccion->nombre = $request->input('nombre');
            $seccion->descripcion = $request->input('descripcion');
            $seccion->save();
            return redirect($url);
        }

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
    public function update(Request $request, $id)
    {
        $url = ('admin/secciones/create');

        $seccion = Seccion::findOrFail($request->ide);
        $seccion->update($request->all());

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
        $seccion = Seccion::find($id);
        $seccion->delete();

        $url = ('admin/secciones/create');

        return redirect($url);
    }
}
