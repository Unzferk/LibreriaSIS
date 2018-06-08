<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";

    protected $fillable = ['nombre','codigo_pro','marca','precio','stock','seccion_id','descripcion'];

    public function categoria(){
    	return $this->belongsToMany('App\Categoria');
    }

    public function seccion(){
    	return $this->belongsTo('App\Seccion');
    }
    public function proveedores(){
    	return $this->belongsToMany('App\Proveedor');
    }
    public function productos(){
        return $this->belongsToMany('App\Producto');
    }

}

