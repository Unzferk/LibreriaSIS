<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            //campos
            $table->increments('id');
            $table->string('codigo_pro',10);
            $table->string('nombre',30);
            $table->string('marca',15);
            $table->integer('precio');
            $table->integer('stock');
            $table->integer('categoria_id')->unsigned();
            $table->integer('seccion_id')->unsigned();
            $table->String('descripcion',130);

            //estableciendo llaves foraneas
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->foreign('seccion_id')->references('id')->on('seccion');
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
        Schema::dropIfExists('producto');
    }
}
