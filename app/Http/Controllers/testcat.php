<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcat extends Controller
{
    //
}







/*
<?php namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}


	//presenta el formulario para nuevo usuario
	public function agregar_nueva_categoria()
	{

		$data=Request::all();

		$categoria= new Categoria;
		$categoria->nombre  =  $data["nombre"];
		$categoria->descripcion=$data["descripcion"];

		$resul= $categoria->save();

		if($resul){
            
            return view("mensajes.msj_correcto")->with("msj","Categoria Registrado Correctamente");   
		}
		else
		{
             
             return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
		}
	}

}
*/