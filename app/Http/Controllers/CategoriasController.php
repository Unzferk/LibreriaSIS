<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Categoria; 
use App\Http\Requests\CategoriaRequest;

use Excel;
use Illuminate\Support\Facades\Input;


class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categorias = Categoria::orderBy('nombre','ASC')->paginate(5);
        return view('formularios.categorias.index')->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categorias = Categoria::orderBy('nombre','ASC')->paginate(5);
        return view('formularios.categorias.create')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = ('admin/categorias/create');

        $rules = array(
         'nombre' => 'required|string|unique:categoria,nombre|min:3|max:60',
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
            $categoria = new Categoria;
            $categoria->nombre = $request->input('nombre');
            $categoria->descripcion = $request->input('descripcion');
            $categoria->save();
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
        //$categoria = Categoria::find($id);

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
        $url = ('admin/categorias/create');

        $categoria = Categoria::findOrFail($request->ide);
        $categoria->update($request->all());

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
        $categoria = Categoria::find($id);
        $categoria->delete();

        $url = ('admin/categorias/create');

        return redirect($url);
    }

}
