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
         'descripcion' => 'max:140',
        );
        $messages = array(
          'nombre.required' => 'El campo es obligatorio',
          'nombre.string' => 'Solo se permite letras',
          'nombre.unique' => 'Este nombre ya existe',
          'descripcion' => 'Solo se permite 140 carateres',
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

   /* public function import_categorias(Request $request)
  {
    $file = Input::file('categoriasFile');
    $rules = array(
      'categoriasFile' => 'required|mimes:xlsx',
    );
    $messages = array(
      'required' => 'ningun archivo xlsx seleccionado',
      'mimes' => 'el formato no es compatible'
    );
    $validator = Validator::make(Input::all(), $rules, $messages);
    if ($validator->fails()) {

      return redirect('import_categorias')->withErrors($validator);

    } else if(!$this->valid_document($file)) {

      return redirect('import_categorias')->with('bad_status', 'Documento invalido');

    } else if($validator->passes()) {

      Excel::load($file, function($reader)
      {
        foreach ($reader->get() as $key => $value) {

          if(!is_null($value->fecha_ini) &&
             !is_null($value->fecha_fin) &&
             !is_null($value->periodo)) {

            $date = AcademicTerm::where('date_ini', $value->fecha_ini)
                                ->where('date_fin', $value->fecha_fin)
                                ->where('period', $value->periodo)
                                ->first();

            if(is_null($date)) {
            $date = new AcademicTerm();
            $date->date_ini = $value->fecha_ini;
            $date->date_fin = $value->fecha_fin;
            $date->period = $value->periodo;
            $date->save();
            }
            
          }
        }
      });
    }
    return redirect('import_categorias')->with('status', 'Los cambios se realizaron con exito.');
  }*/
}
