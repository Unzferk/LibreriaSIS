<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','default') | IRBE</title>
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


</head>
<body>
    <header>
        <span class="lnr lnr-menu show"></span>
        <img src="{{ asset('img/irbe6.png') }}" width="300" height="47" class="img-responsive" style="padding-left: 5%; margin-top: -5px; margin-left: 33%;">
        <i class="fas fa-bell fa-2x img-responsive" style="margin-top: 10px; margin-left: 30%;"></i>        
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
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    
    <script> $(document).ready(function(){
        $('#Mytable').DataTable({"language" : idioma_espanol}); } );
        var idioma_espanol = {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }    
    </script>

</body>
</html>