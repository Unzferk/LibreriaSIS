@extends('template.base')

@section('title','home')
	

@section('content-yield')
<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('icon/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">


<div class="container ">
	
<div class="row">
    <div class="col-sm-12 col-md-1 card-container"></div>
    <div class="col-sm-12 col-md-3 card-container">
	<a href="<?= URL::to('admin/productos/create'); ?>">
		<img class="rounded float-left" 
		src="{{ asset('img/producto1.png') }}" alt="Card image cap" class="img-responsive" style="width: 9rem; 
		padding-left: 0%; margin-top: 30px; margin-left: 0%;">
	</a></div>
	<div class="col-sm-12 col-md-3 card-container">
	<a href="<?= URL::to('admin/proveedores/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/proveedor.png') }}" alt="Card image cap" class="img-responsive" style="width: 9rem; 
		padding-left: 0%; margin-top: 30px; margin-left: 0%;">
	</a></div>
	<div class="col-sm-12 col-md-3 card-container">
	<a href="<?= URL::to('admin/categorias/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/categoria.png') }}" alt="Card image cap" class="img-responsive" style="width: 9rem; 
		padding-left: 0%; margin-top: 30px; margin-left: 0%;">
	</a></div>
</div>
<h1></h1>
<div class="row">
	<div class="col-sm-12 col-md-1 card-container"></div>
    <div class="col-sm-12 col-md-3 card-container">
	<a href="<?= URL::to('admin/secciones/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/secciones.png') }}" alt="Card image cap" class="img-responsive" style="width: 10rem; 
		padding-left: 0%; margin-top: 20px; margin-left: 0%;">
	</a></div>
	<div class="col-sm-12 col-md-3 card-container">
	<a href="/inicio">
		<img class="card-img-top" 
		src="{{ asset('img/producto.png') }}" alt="Card image cap" class="img-responsive" style="width: 9rem; 
		padding-left: 0%; margin-top: 30px; margin-left: 0%;">
	</a></div>
	<div class="col-sm-12 col-md-3 card-container"> 
	<a href="/inicio">
		<img class="rounded float-left" 
		src="{{ asset('img/seccion.png') }}" alt="Card image cap" class="img-responsive" style="width: 7rem; 
		padding-left: 0%; margin-top: 30px; margin-left: 0%;">
	</a></div>
</div>
</div>


@endsection




