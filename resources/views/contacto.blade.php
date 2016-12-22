@extends('layouts.principal')

@section('contenido')
	    <main>
        <section class="row">
            <article class="columns small-12">
                <h3>Contáctanos</h3>
                <p>
                    Entregamos a domicilio en todo el DF y zona metropolitana ¡VISITANOS¡ Estamos ubicados Frente a Mc Donals Vista hermosa (Abajo Google Maps) Direccion: Av. Noche de paz, No.14 Local-5, Col. Lomas de Vista Hermosa, Delegación Cuajimalpa de Morelos, México
                    D.F Contactanos via e-mail llenado el formulario de contacto o Via telefonica llamando a nuestro centro de servicio a clientes. TELEFONO 6304-5537 y 5813-2427 cel. 04455-2708-6600 TAMBIEN NOS PUEDES ESCRIBIR A floreriabiosfera@hotmail.com
                    **** El siguiente Formulario es solo para cotizaciones.**** Pedidos Urgentes y precios comunicarse al Teléfono 04455-2708-6600 En Calle, CP y Ciudad Ingrese los datos del lugar de envio.
                </p>
            </article>
            <article class="columns small-12 medium-6">
                <form name="bio-contact-form" method="post" action="envio_contacto.php">
                    <div class="row">
                        <div class="medium-6 columns">
                            <label>Nombre:
                              <input type="text" name="bio_nombre" required>
                            </label>
                        </div>
                        <div class="medium-6 columns">
                            <label>Apellido:
                              <input type="text" name="bio_apellido" required>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 columns">
                            <label>Email:
                              <input type="text" name="bio_email" required>
                            </label>
                        </div>
                        <div class="medium-6 columns">
                            <label>Asunto:
                              <input type="text" name="bio_asunto" required>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12 columns">
                            <label>Asunto:
                              <textarea rows="5" name="bio_mensaje" required>
                                
                              </textarea>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12 columns">
                            <button type="submit" class="expanded button">Enviar</button>
                        </div>
                    </div>
                </form>
            </article>
            <article class="columns small-12 medium-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses-419!2smx!4v1479756097652!6m8!1m7!1sop8QQwXzjgAJj-WWF5v29w!2m2!1d19.3728725889224!2d-99.27782500431974!3f205.21630424479156!4f-7.248857316259489!5f0.7820865974627469" width="100%" height="450"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
            </article>
        </section>
    </main>
@endsection