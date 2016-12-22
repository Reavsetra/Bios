<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floreria Biosfera | Servicio Exprés en Santa Fe, Cuajimalpa, Interlomas</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="{{ URL::asset('lib/font-awesome-4.6.3/css/font-awesome.min.css') }}">
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <!-- LayerSlider stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('lib/layerslider/css/layerslider.cs') }}s" type="text/css">
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="{{ URL::asset('lib/fancybox/source/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

   
</head>

<body>
    @include('navegacion')

    <!--=========================================
                Carrusel 
    ==========================================-->
    @section('carrusel')    
    @show

    <!--=========================================
                Contenido Principal
    ==========================================-->

    @section('contenido')
    @show

    <!--=========================================
                Scripts
    ==========================================-->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="js/app.js"></script>
    <!-- External libraries: jQuery & GreenSock -->
    <script src="lib/layerslider/js/greensock.js" type="text/javascript"></script>
    <!-- LayerSlider script files -->
    <script src="lib/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="lib/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <script src="lib/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
</body>

</html>
