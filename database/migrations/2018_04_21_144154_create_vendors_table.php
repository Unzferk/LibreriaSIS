<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->String('codigo_prv',10)->unique();
            $table->String('nombre',60);
            $table->String('telefono',8);
            $table->String('correo',60);
            $table->String('pag_web',60);
            $table->String('fax',30);
            $table->String('direccion',130)->nullable();
            $table->timestamps();
        });

        Schema::create('proveedor_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('producto_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();

            $table->foreign('producto_id')->references('id')->on('producto');
            $table->foreign('proveedor_id')->references('id')->on('proveedor');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
}
