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
            $table->string('codigo_pro',10)->unique();
            $table->string('nombre',60);
            $table->string('marca',15)->nullable();
            $table->double('precio',8,2);
            $table->integer('stock')->nullable();
            $table->integer('seccion_id')->unsigned();
            $table->String('descripcion',130)->nullable();

            //estableciendo llaves foraneas
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
