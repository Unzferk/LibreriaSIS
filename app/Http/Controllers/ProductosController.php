<?php

namespace App\Http\Controllers;

//use Validator;
use Illuminate\Http\Request;
use App\Producto;
use App\Seccion;
use App\Http\Requests\ProductoRequest; 
use Excel;
use Illuminate\Support\Facades\Input;

class ProductosController extends Controller
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
        $secciones = Seccion::all();
        $productos = Producto::orderBy('nombre','ASC')->paginate(5);

        return view('formularios.productos.create')->with('productos', $productos)->with('secciones', $secciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request)
    {
        $url = ('admin/productos/create');

        $producto = new Producto;
        
        $producto->codigo_pro = $request->input('codigo_pro');
        $producto->nombre = $request->input('nombre');
        $producto->marca = $request->input('marca');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        //$producto->categoria_id = $request->input('categoria_id');
        $producto->seccion_id = $request->input('seccion_id');
        $producto->descripcion = $request->input('descripcion');

        $producto->save();
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
    public function update(Request $request, $id)
    {
        $url = ('admin/productos/create');

        $producto = Producto::findOrFail($request->ide);
        $producto->update($request->all());

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
        $producto = Producto::find($id);
        $producto->delete();

        $url = ('admin/productos/create');

        return redirect($url);
    }
}
