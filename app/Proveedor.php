<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedor";
    
    protected $fillable = ['nombre','codigo_prv','telefono','correo','pag_web','fax','direccion'];

    public function productos(){
    	return $this->belongsToMany('App\Producto');
    }
}
