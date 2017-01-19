<nav>
    <div class="logo">
        <img class="show-for-small-only" src="{{ URL::asset('img/logo-res.png') }}" alt="Biosfera Floreria">
        <img class="hide-for-small-only" src="{{ URL::asset('img/logo.png') }}" alt="Biosfera Floreria">
    </div>
    <div id="toggle-menu" class="nav-bar">
        <span></span>
    </div>
    <div class="nav-full nav-full-compressed">
        <ul>
            <li><a class="principal" href="{{ url('/') }}">Inicio</a></li>
            <li><a class="principal" href="{{ url('/servicios') }}">Servicios</a></li>
            <li><a class="principal arreglos">Arreglos</a>
                <div class="sub-nav">
                    <ul>
                        <li><a href="{{ url('/arreglos/obsequio') }}"><i class="fa fa-gift fa-2x" aria-hidden="true"></i> Obsequio</a></li>
                        <li><a href="{{ url('/arreglos/festivos') }}"><i class="fa fa-birthday-cake fa-2x" aria-hidden="true"></i> Días Festivos</a></li>
                        <li><a href="{{ url('/arreglos/orquideas') }}"><i class="fa fa-leaf fa-2x" aria-hidden="true"></i> Orquídeas</a></li>
                        <li><a href="{{ url('/arreglos/eventos') }}"><i class="fa fa-users fa-2x" aria-hidden="true"></i> Eventos</a></li>
                        <li><a href="{{ url('/arreglos/empresariales') }}"><i class="fa fa-building fa-2x" aria-hidden="true"></i> Empresariales</a></li>
                        <li><a href="{{ url('/arreglos/frutales') }}"><i class="fa fa-lemon-o fa-2x" aria-hidden="true"></i> Frutales</a></li>
                        <li><a href="{{ url('/arreglos/funebres') }}"><i class="fa fa-truck fa-2x" aria-hidden="true"></i> Fúnebres</a></li>
                        <li><a href="{{ url('/arreglos/navidad') }}"><i class="fa fa-tree fa-2x" aria-hidden="true"></i> Navideños</a></li>
                        <li><a href="{{ url('/arreglos/ramos') }}"><i class="fa fa-map-pin fa-2x" aria-hidden="true"></i> Ramos</a></li>
                        <li><a href="{{ url('/arreglos/bebes') }}"><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i> Bebés</a></li>
                    </ul>
                </div>
            </li>
            <li><a class="principal" href="/contacto">Contacto</a></li>
        </ul>
    </div>
</nav>