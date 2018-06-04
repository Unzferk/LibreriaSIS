@extends('template.base')

@section('title','home')
	

@section('content-yield')
	<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

	<div class="container ">
	
	<a href="<?= URL::to('admin/productos/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/producto1.png') }}" alt="Card image cap" class="img-responsive" style="width: 12rem; 
		padding-left: 1%; margin-top: 30px; margin-left: 5%;">
	</a>

	<a href="<?= URL::to('admin/proveedores/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/proveedor.png') }}" alt="Card image cap" class="img-responsive" style="width: 12rem; 
		padding-left: 1%; margin-top: 30px; margin-left: 5%;">
	</a>
	<a href="<?= URL::to('admin/categorias/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/categoria.png') }}" alt="Card image cap" class="img-responsive" style="width: 12rem; 
		padding-left: 1%; margin-top: 30px; margin-left: 5%;">
	</a>

	<h1></h1>

	<a href="<?= URL::to('admin/productos/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/categoria1.png') }}" alt="Card image cap" class="img-responsive" style="width: 12rem; 
		padding-left: 1%; margin-top: 30px; margin-left: 5%;">
	</a>
	<a href="<?= URL::to('admin/productos/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/categoria2.png') }}" alt="Card image cap" class="img-responsive" style="width: 12rem; 
		padding-left: 1%; margin-top: 30px; margin-left: 5%;">
	</a> 
	<a href="<?= URL::to('admin/productos/create'); ?>">
		<img class="card-img-top" 
		src="{{ asset('img/producto0.png') }}" alt="Card image cap" class="img-responsive" style="width: 12rem; 
		padding-left: 1%; margin-top: 30px; margin-left: 5%;">

	</a>


</div>


@endsection




