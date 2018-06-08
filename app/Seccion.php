<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = "seccion";

    protected $fillable = ['nombre','descripcion'];

    public function productos(){
    	return $this->hasMany('App\Producto');
    }

}
