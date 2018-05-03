<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','default') | IRBE</title>
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <header>
        <span class="lnr lnr-menu show"></span>
        <img src="{{ asset('img/irrbe.png') }}" width="300" height="47" class="img-responsive" style="padding-left: 5%; margin-top: 5px;">        
    </header>

    <main>
        <!--<?= URL::to('admin/categorias/create'); ?>
        
            
        
           
            -->

        <div class="content-menu">
            <li> <a href="/inicio"> <span class="lnr lnr-home icon1"></span><h6 class="text1">Inicio</h6></a></li>
            <li> <a href="<?= URL::to('admin/productos/create'); ?>"> <span class="lnr lnr-store icon3"></span><h6 class="text3">Productos</h6></a></li>
            <li> <a href="<?= URL::to('admin/proveedores/create'); ?>"> <span class="lnr lnr-mustache icon5"></span><h6 class="text5">Proveedor</h6></a></li>            
            <li> <a href="<?= URL::to('admin/categorias/create'); ?>"> <span class="lnr lnr-tag icon7"></span><h6 class="text7">Categorias</h6></a></li>
            <li> <a href="<?= URL::to('admin/secciones/create'); ?>">   <span class="lnr lnr-book icon8"></span><h6 class="text8">Secciones</h6></a></li>
            <li>  <span class="lnr lnr-question-circle icon9"></span><h6 class="text9">Nosotros</h6></li>
        </div>
        
        <div class="contend-main">    
           
                @yield('content-yield')
           
        </div>
    </main>
    

    <script src="{{asset('plugin/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>