<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedor";

    protected $fillable = ['nombre','marca','precio','correo','pag_web','fax','direccion'];

    public function productos(){
    	return $this->belongsToMany('App\Producto');
    }
}
