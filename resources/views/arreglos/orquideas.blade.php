@extends('layouts.arreglos')
@section('title', 'Arreglos con Orquideas')

@section('contenido')
    <!--=== Cabecera Parallax ===-->
    <div id="parall-orquideas" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="-300">
    </div>
    <!--=== Contenido Principal ===-->
    <main>
        <section class="row arreglos more-send">
            <div class="columns">
                <?php
                    $json = file_get_contents('http://www.floreriabiosfera.com/js/data.json');
                    $json_output = json_decode($json);
                    $arreglo = $json_output->arreglos[1];
                    $arrList = $arreglo->lista;
                    echo '
                        <article>
                            <h3>'.$arreglo->nombre.'</h3>
                            <h2 class="sf-seo">Florerias en México / Florerias en Santa Fe</h2>
                            <p>
                                '.$arreglo->introduccion.'
                            </p>
                            
                            <div class="gallery">';
                            foreach ($arrList as $value) {
                                echo '
                                <div class="item">
                                    <div class="thumbnail">
                                        <a class="fancybox" rel="group" href="http://www.floreriabiosfera.com/img/arreglos/'.$value->imagen.'">
                                        <img class="pic" src="http://www.floreriabiosfera.com/img/arreglos/'.$value->imagen.'" alt="" />
                                        </a>
                                    </div>
                                    <h3>'.$value->titulo.'</h3>
                                    <div class="price">
                                        <p>
                                            '.$value->precio.'
                                        </p>
                                    </div>
                                </div>
                                ';
                            }
                    echo "</div></article";
                ?>
            </div>
        </section>
    </main>
@endsection