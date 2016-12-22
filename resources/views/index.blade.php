@extends('layouts.principal')

@section('contenido')
	<div id="principal-slider">
        <!-- Primer slide -->
        <div class="ls-slide" data-ls="duration:9000;parallax:true;transition2d:5;offsetxin:0; texttransitionin:true;">
            <img src="img/layerslider/garden.jpg" class="ls-bg" alt="Slide background">
            <div class="ls-l" data-ls="scalein:2;durationin:2000; " style="top: 57%; left: 50%; width: 60%;">
                <div class="container-white">
                </div>
            </div>
            <h3 class="ls-l pay-title" data-ls="offsetyin:-200;durationin:2000;" style="top: 25%; left: 50%;">Floreria Biosfera</h3>
            <div class="ls-l info" style="top:38%; left:55%; width: 550px;">
                <p>Para tu comodidad, en Floreria Biosfera contamos con diversos tipos de pagos así como entrega a domicilio. Elije la opción que más se adapte a tus necesidades
                </p>
            </div>
            <!--  <p class="ls-l pay-text"  data-ls="texttypein:words_center;" style="top: 35%; left: 50%;">Para tu comodidad, en Floreria Biosfera contamos con diversos tipos de pagos así como entrega a domicilio.</p>
        <p class="ls-l pay-text" data-ls="texttypein:words_center;" style="top: 40%; left: 50%;">Elije la opción que más se adapte a tus necesidades</p> -->
            <img class="ls-l" data-ls="offsetxin:-100;delayin:1500;durationin:3000;" style="width: 550px; top: 58%; left: 25%;" src="img/layerslider/camioneta.png" alt="Camioneta de Entrega">
            <img class="ls-l" data-ls="scalein:0;delayin:2500" style="width:80px; top: 52%; left: 45%;" src="img/layerslider/oxxo.png" alt="Pago en OXXO">
            <img class="ls-l" data-ls="scalein:0;delayin:2750" style="width:160px; top: 52%; left: 60%;" src="img/layerslider/visa-mastercard.png" alt="Pago con Tarjeta">
            <img class="ls-l" data-ls="scalein:0;delayin:3000" style="width:80px; top: 52%; left:75%;" src="img/layerslider/amex.png" alt="American Express">
            <div class="ls-l urgentes" data-ls="scalein:0;delayin:3100;durationin:2000;" style="top: 68%; left: 59%; width: 350px;">
                <p>Pedidos: (0155) 6304-5537, 5813-2427
                    <br> Urgentes: (044)(55)2708-6600</p>
            </div>
        </div>
        <!-- Segundo slide -->
        <div class="ls-slide" data-ls="duration:4000;transition2d:5;">
            <!-- Imagen de fondo -->
            <img src="img/layerslider/gift.jpg" class="ls-bg" alt="Slide background">
            <h2 class="ls-l sl2-title" style="top: 450px; left: 50px;">Tenemos el regalo perfecto <br> para esa ocasión especial</h2>
        </div>
    </div>
    <!--=========================================
                Contenido Principal
    ==========================================-->
    <main>
        <!-- Nosotros -->
        <section class="row intro">
            <article class="columns">
                <h3>Floreria Biosfera</h3>
                <h1 class="sf-seo">Florserias Santa Fé / Florerías en Interlomas / Florerías en Cuajimalpa</h1>
                <p>
                    En Floreria Biosfera contamos con un amplio catáloago de arreglos florales para toda ocasión, contamos con envíos exprés en las zonas de Santa Fe, Cuajimalpa, Interlomas, Tecamachalco, Polanco, Bosques. Consulta nuestro productos o llámanos a los teléfonos:
                </p>
                <div class="row">
                    <div class="columns small-12 large-4">
                        <div class="row info-contact">
                            <div class="columns">
                                <h4 class="contact-info">Ubicación</h4>
                                <address>
                                    <i class="fa fa-home" aria-hidden="true"></i> Av. Noche de Paz No. 14  Loc. 5D C.P. 05249
                                    <br> Lomas de Vista Hermosa,México CDMX
                                    <br>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="columns small-12 large-4">
                        <div class="row info-contact">
                            <div class="columns">
                                <h4 class="contact-info">Pedidos Vía Telefónica:</h4>
                                <i class="fa fa-phone" aria-hidden="true"></i>  (0155) 6304-5537<br>
                                <i class="fa fa-phone" aria-hidden="true"></i>  (0155) 5813-2427
                            </div>
                        </div>
                    </div>
                    <div class="columns medium-12 large-4">
                        <div class="row info-contact">
                            <div class="columns">
                                <h4 class="contact-info">Pedidos Vía WhatsApp:</h4><br>
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>  (044)(55)2708-6600
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <!-- Arreglos -->
        <section class="row arreglos more-send">
            <div class="columns">
                <!-- Galeria de arreglos florales de la categoria -->
                <div class="gallery">
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/001.jpg">
                                <img class="pic" src="img/arreglos/festivos/001.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 01</h3>
                        <div class="price">
                            <p>
                                $1,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/002.jpg">
                                <img class="pic" src="img/arreglos/festivos/002.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 02</h3>
                        <div class="price">
                            <p>
                                $1,600.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/003.jpg">
                                <img class="pic" src="img/arreglos/festivos/003.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 03</h3>
                        <div class="price">
                            <p>
                                $1,200.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/004.jpg">
                                <img class="pic" src="img/arreglos/festivos/004.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 04</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/005.jpg">
                                <img class="pic" src="img/arreglos/festivos/005.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 05</h3>
                        <div class="price">
                            <p>
                                $1,200.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/006.jpg">
                                <img class="pic" src="img/arreglos/festivos/006.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 06</h3>
                        <div class="price">
                            <p>
                                $1,500.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/007.jpg">
                                <img class="pic" src="img/arreglos/festivos/007.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 07</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/008.jpg">
                                <img class="pic" src="img/arreglos/festivos/008.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 08</h3>
                        <div class="price">
                            <p>
                                $1,200.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/009.jpg">
                                <img class="pic" src="img/arreglos/festivos/009.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 09</h3>
                        <div class="price">
                            <p>
                                $1,600.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/010.jpg">
                                <img class="pic" src="img/arreglos/festivos/010.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 10</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/011.jpg">
                                <img class="pic" src="img/arreglos/festivos/011.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 11</h3>
                        <div class="price">
                            <p>
                                $1,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/012.jpg">
                                <img class="pic" src="img/arreglos/festivos/012.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 12</h3>
                        <div class="price">
                            <p>
                                $1,300.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/013.png">
                                <img class="pic" src="img/arreglos/festivos/013.png" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 13</h3>
                        <div class="price">
                            <p>
                                $700.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/014.jpg">
                                <img class="pic" src="img/arreglos/festivos/014.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 14</h3>
                        <div class="price">
                            <p>
                                $1,200.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/015.jpg">
                                <img class="pic" src="img/arreglos/festivos/015.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 15</h3>
                        <div class="price">
                            <p>
                                $700.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/016.jpg">
                                <img class="pic" src="img/arreglos/festivos/016.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 16</h3>
                        <div class="price">
                            <p>
                                $1,500.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/017.jpg">
                                <img class="pic" src="img/arreglos/festivos/017.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 17</h3>
                        <div class="price">
                            <p>
                                $1,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/018.jpg">
                                <img class="pic" src="img/arreglos/festivos/018.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 18</h3>
                        <div class="price">
                            <p>
                                $1,500.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/019.jpg">
                                <img class="pic" src="img/arreglos/festivos/019.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 19</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/020.jpg">
                                <img class="pic" src="img/arreglos/festivos/020.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 20</h3>
                        <div class="price">
                            <p>
                                $1,200.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/021.jpg">
                                <img class="pic" src="img/arreglos/festivos/021.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 21</h3>
                        <div class="price">
                            <p>
                                $600.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/022.jpg">
                                <img class="pic" src="img/arreglos/festivos/022.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 22</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/023.jpg">
                                <img class="pic" src="img/arreglos/festivos/023.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 23</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/024.jpg">
                                <img class="pic" src="img/arreglos/festivos/024.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 24</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/025.jpg">
                                <img class="pic" src="img/arreglos/festivos/025.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 25</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/026.jpg">
                                <img class="pic" src="img/arreglos/festivos/026.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 26</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/027.jpg">
                                <img class="pic" src="img/arreglos/festivos/027.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 27</h3>
                        <div class="price">
                            <p>
                                $2,800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/028.jpg">
                                <img class="pic" src="img/arreglos/festivos/028.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 28</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/029.jpeg">
                                <img class="pic" src="img/arreglos/festivos/029.jpeg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 29</h3>
                        <div class="price">
                            <p>
                                $1,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/030.jpg">
                                <img class="pic" src="img/arreglos/festivos/030.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 30</h3>
                        <div class="price">
                            <p>
                                $500.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/031.png">
                                <img class="pic" src="img/arreglos/festivos/031.png" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 31</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/032.jpg">
                                <img class="pic" src="img/arreglos/festivos/032.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 32</h3>
                        <div class="price">
                            <p>
                                $1,500.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/033.png">
                                <img class="pic" src="img/arreglos/festivos/033.png" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 33</h3>
                        <div class="price">
                            <p>
                                $1,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/034.jpg">
                                <img class="pic" src="img/arreglos/festivos/034.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 34</h3>
                        <div class="price">
                            <p>
                                $750.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/035.jpg">
                                <img class="pic" src="img/arreglos/festivos/035.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 35</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/036.jpg">
                                <img class="pic" src="img/arreglos/festivos/036.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 36</h3>
                        <div class="price">
                            <p>
                                $900.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/037.jpg">
                                <img class="pic" src="img/arreglos/festivos/037.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 37</h3>
                        <div class="price">
                            <p>
                                $500.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/038.jpg">
                                <img class="pic" src="img/arreglos/festivos/038.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 38</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/039.jpg">
                                <img class="pic" src="img/arreglos/festivos/039.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 39</h3>
                        <div class="price">
                            <p>
                                $1,400.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/040.jpg">
                                <img class="pic" src="img/arreglos/festivos/040.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 40</h3>
                        <div class="price">
                            <p>
                                $1,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/041.jpg">
                                <img class="pic" src="img/arreglos/festivos/041.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 41</h3>
                        <div class="price">
                            <p>
                                $1,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/042.jpg">
                                <img class="pic" src="img/arreglos/festivos/042.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 42</h3>
                        <div class="price">
                            <p>
                                $1,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/043.jpg">
                                <img class="pic" src="img/arreglos/festivos/043.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 43</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/044.jpg">
                                <img class="pic" src="img/arreglos/festivos/044.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 44</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/045.jpg">
                                <img class="pic" src="img/arreglos/festivos/045.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 45</h3>
                        <div class="price">
                            <p>
                                $500.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/046.jpg">
                                <img class="pic" src="img/arreglos/festivos/046.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 46</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/047.jpg">
                                <img class="pic" src="img/arreglos/festivos/047.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 47</h3>
                        <div class="price">
                            <p>
                                $2,000.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/048.jpg">
                                <img class="pic" src="img/arreglos/festivos/048.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 48</h3>
                        <div class="price">
                            <p>
                                $800.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/049.jpg">
                                <img class="pic" src="img/arreglos/festivos/049.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 49</h3>
                        <div class="price">
                            <p>
                                $1,500.00
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="thumbnail">
                            <a class="light-gallery" rel="group" href="img/arreglos/festivos/050.jpg">
                                <img class="pic" src="img/arreglos/festivos/050.jpg" alt="" />
                            </a>
                        </div>
                        <h3>Festivos 50</h3>
                        <div class="price">
                            <p>
                                $1,800.00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Continuación Nosotros -->
        <section class="row">
            <article class="columns">
                <h3>Esperamos Gustosos su Llamada <br> !La Experiencia Hace la Diferencia¡</h3>
                <p class="text-center">
                    Nuestro horario de atención a clientes es de Lunes a Viernes de 8:00 a 19:30 al telefono 58132427 Sabados y Domingos, dias feriados o SERVICIOS URGENTES al telefóno 044 55 27 08 66 00 ***Nota Importante Favor de Leer *** POR SU SEGURIDAD, NO ACEPTAMOS PAGOS VIA INTERNET, TODOS LOS PEDIDOS SE DEBEN REALIZAR VIA TELEFONICA A NUESTRO CENTRO DE SERVICIO A CLIENTES O VIA CORREO ELECTRONICO LLENADO EL FORMULARIO UBICADO EN EL AREA DE CONTACTO Y MENCIONANDO EN EL MENSAJE EL CODIGO DEL PRODUCTO EL CUAL VIENE EN LA PARTE SUPERIOR DE CADA IMAGEN ¡COTIZACIONES SIN COSTO¡
                </p>
                <p class="text-center">arreglos florales df, arreglos florales mexico, arreglos florales para toda ocacion,entrega a domicilio, floreria.
                </p>
            </article>
        </section>
    </main>
    <!--=========================================
                Píe de Página
    ==========================================-->
    <footer>
        <div class="row align-middle">
            <div class="small-12 columns">
                <address>
                    <i class="fa fa-home" aria-hidden="true"></i> Av. Noche de Paz No. 14
                    <br> Loc. 5D C.P. 05249
                    <br> Lomas de Vista Hermosa
                    <br> México CDMX
                    <br>
                </address>
            </div>
            <div class="small-12 columns social">
                <a class="redes" href="https://www.facebook.com/Florería-Biosfera-1682271752064319/">
                    <i class="fa fa-facebook fa-3x"></i>
                </a>
                <a class="redes" href="https://twitter.com/">
                    <i class="fa fa-twitter fa-3x"></i>
                </a>
            </div>
            <div class="small-12 columns">
                <address class="phone">
                    <i class="fa fa-phone" aria-hidden="true"></i> (52) (55) 6304-5537
                    <br>
                    <i class="fa fa-phone" aria-hidden="true"></i> (52) (55) 5813-2427
                    <br>
                    <i class="fa fa-mobile" aria-hidden="true"></i> (044)(55) 2708-6600
                    <br>
                    <a href="mailto:floreriabiosfera@hotmail.com">
              info@floreriabiosfera.com
            </a>
                </address>
            </div>
        </div>
        <!-- Politicas y Copyrigth -->
        <div class="row copyright">
            <div class="column">
                <p class="text-center">El uso de este sitio hace constar que se acepta la <a href="terminos-condiciones.html">Términos y condiciones</a> de floreriabiosfera.com</p>
                <p class="text-center">Copyrigth ©2016 floreriabiosfera.com Todos los Derechos Reservados</p>
            </div>
        </div>
    </footer>
@endsection