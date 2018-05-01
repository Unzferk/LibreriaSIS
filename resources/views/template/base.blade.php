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
        <img src="{{ asset('img/irrbe.png') }}" width="300" height="50" class="img-responsive" style="padding-left: 5%; margin-top: 5px;">        
    </header>

    <main>

        <div class="content-menu">
            <li> <a href="<?= URL::to('admin/categorias/create'); ?>"> <span class="lnr lnr-home icon1"></span><h6 class="text1">Inicio</h6></a></li>
            <li><span class="lnr lnr-film-play icon2"></span><h6 class="text2">Videos</h6></li>
            <li><span class="lnr lnr-store icon3"></span><h6 class="text3">Productos</h6></li>
            <li><span class="lnr lnr-picture icon4"></span><h6 class="text4">Galeria</h6></li>
            <li><span class="lnr lnr-briefcase icon5"></span><h6 class="text5">Foro</h6></li>
            <li><span class="lnr lnr-license icon6"></span><h6 class="text6">Blog</h6></li>
            <li><span class="lnr lnr-bubble icon7"></span><h6 class="text7">Mensajes</h6></li>
            <li><span class="lnr lnr-envelope icon8"></span><h6 class="text8">Contactos</h6></li>
            <li><span class="lnr lnr-question-circle icon9"></span><h6 class="text9">Nosotros</h6></li>
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