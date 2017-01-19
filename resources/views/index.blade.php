@extends('layouts.principal')
@section('title', 'Servicio Exprés en Santa Fe, Cuajimalpa, Interlomas')

@section('contenido')
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
                            <div class="columns whats-app">
                                <h4 class="contact-info">Pedidos Vía:</h4>
                                <img src="{{ URL::asset('img/whats.png') }}">
                                (55) 2708-6600
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
@endsection