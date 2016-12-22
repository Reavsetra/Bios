<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Floreria Biosfera | @yield('title')</title>
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

    <!--===Contenido Principal ===-->

    @section('contenido')
    @show

    @include('footer')
    <!--=== Scripts ===-->
    <script src="{{ URL::asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ URL::asset('lib/fancybox/source/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
    <script src="{{ URL::asset('lib/stellar/jquery.stellar.min.js') }}"></script>
    @if (\Request::is('contacto')) 
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWY-SJ_3hztn-mEep1zYhE1_7Do89JnAk&callback=initMap">
        </script>
    @endif
    <script src="{{ URL::asset('js/arreglos.js') }}"></script>

</body>

</html>
