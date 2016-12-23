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
    
    @include('carrusel')

    <!--===Contenido Principal ===-->

    @section('contenido')
    @show

    @include('footer')
    <!--=== Scripts ====-->
    <script src="{{ URL::asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <!-- External libraries: jQuery & GreenSock -->
    <script src="{{ URL::asset('lib/layerslider/js/greensock.js') }}" type="text/javascript"></script>
    <!-- LayerSlider script files -->
    <script src="{{ URL::asset('lib/layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('lib/layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('lib/fancybox/source/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script type="text/javascript">
      // Running the code when the document is ready
      $(document).ready(function() {
          $(".light-gallery")
              .fancybox({
                  padding: 0,
                  // helpers: {
                  //   overlay: {
                  //     locked: false
                  //   }
                  // }
              });
          // Calling LayerSlider on the target element
          $('#principal-slider').layerSlider({
              autoStart: true,
              responsive: true,
              firstSlide: 1,
              navButtons: false,
              navStartStop: false,
              skinsPath: 'lib/layerslider/skins/',
              skin: 'v6'
          });
      });
    </script>
</body>

</html>
