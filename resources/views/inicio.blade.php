@extends('template.base')

@section('title','home')

@section('content-yield')
<link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('icon/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">


<div class="container ">
	
<div class="row">
	<div class="col-xs-0 col-sm-0 col-md-1 card-container"></div>
    <div class="col-xs-12 col-sm-6 col-md-3 card-container">
		<a href="<?= URL::to('admin/productos/create'); ?>">
			<img class="rounded float-left" src="{{ asset('img/productos.png') }}" 
			alt="Card image cap" class="img-responsive" style="width: 12rem; 
			padding-left: 0%; margin-top: 30px; margin-left: 0%;">
		</a>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 card-container">
		<a href="<?= URL::to('admin/proveedores/create'); ?>">
			<img class="card-img-top" src="{{ asset('img/proveedores.png') }}" 
			alt="Card image cap" class="img-responsive" style="width: 11rem; 
			padding-left: 0%; margin-top: 43px; margin-left: 0%;">
		</a>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 card-container">
		<a href="<?= URL::to('admin/categorias/create'); ?>">
			<img class="card-img-top" src="{{ asset('img/categorias.png') }}" 
			alt="Card image cap" class="img-responsive" style="width: 11rem; 
			padding-left: 0%; margin-top: 40px; margin-left: 0%;">
		</a>
	</div>

 	<div class="col-xs-0 col-sm-0 col-md-2 card-container"></div>
 	<div class="col-xs-0 col-sm-0 col-md-1 card-container"></div>
    
    <div class="col-xs-12 col-sm-6 col-md-3 card-container">
		<a href="<?= URL::to('admin/secciones/create'); ?>">
			<img class="card-img-top" src="{{ asset('img/seccion.png') }}" 
			alt="Card image cap" class="img-responsive" style="width: 11rem; 
			padding-left: 0%; margin-top: 10px; margin-left: 5%;">
		</a>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 card-container">
		<a href="/inicio">
			<img class="card-img-top" src="{{ asset('img/manual.png') }}" 
			alt="Card image cap" class="img-responsive" style="width: 11rem; 
			padding-left: 0%; margin-top: 10px; margin-left: 0%;">
		</a>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 card-container"> 
		<a href="/inicio">
			<img class="rounded float-left" src="{{ asset('img/nosotros.png') }}" 
			alt="Card image cap" class="img-responsive" style="width: 9rem; 
			padding-left: 0%; margin-top: 10px; margin-left: 0%;">
		</a>
	</div>
	<div class="col-xs-0 col-sm-0 col-md-2 card-container"></div>
</div>
</div>

@endsection