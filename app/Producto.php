<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";

    protected $fillable = ['nombre','marca','precio','stock','categoria_id','seccion_id','Descripcion'];

    public function categoria(){
    	return $this->belongsToMany('App\Categoria');
    }

    public function seccion(){
    	return $this->belongsTo('App\Seccion');
    }
    public function proveedores(){
    	return $this->belongsToMany('App\Proveedor');
    }

}

