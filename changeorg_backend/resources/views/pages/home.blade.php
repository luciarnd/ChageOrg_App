@extends('layouts.public')
@section('content')
    <div class="container">
        <div class="row text-center" id="home">

            <h1>La plataforma mundial para el cambio</h1>
            <span>495.041.869 personas que pasan a la acción
                <a style="color: orangered; text-decoration: underline;">Victorias cada día.</a>
            </span>
            <a href="{{url('peticion/create')}}">
                <input type="button" class="btn" value="Inicia una petición" id="btnnaranja">
            </a>
        </div>

        <div class="row" id="carrousel">
            <div class="col-12">
                <div id="etiqueta">
                    <h3>VICTORIA</h3>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('images/msruHYndufjEdVq-800x450-noPad.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>España ya cuenta con un teléfono para prevenir los suicidios</h5>
                                <p>Después de que su madre se suicidara, Carlos decidió lanzar esta petición para dotar de más recursos a la prevención de los suicidios.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/RogqPhZUTlODEIi-800x450-noPad.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ángel no es culpable. La Fiscalía anula los cargos</h5>
                                <p>Ángel NO es culpable. La Fiscalía anula los cargos contra Ángel Hernández por haber ayudado a morir a su mujer, María José.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/pBxwwYAAkoggXoq-800x450-noPad.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ruth consigue su tarjeta de aparcamiento para personas con discapacidad</h5>
                                <p>Ruth ya tiene la tarjeta de aparcamiento para personas con discapacidad que la Comunidad de Madrid le negaba.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row" id="peticiones">
            <h2>Mira lo que está pasando en Change.org</h2>
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-12 col-lg-8">
                        <div class="card-body">
                            <h5 class="card-title">En memoria de Isabel: ¡POR UNA SALUD MENTAL DIGNA! mas medios y profesionales YA!!</h5>
                            <p class="card-text">El día que enterré a mi hija ella habría cumplido 17 años.  Llevaba más de 2 años sufriendo anorexia, advertimos de su fuerte depresion ,ella misma les pidio ayuda ....pero no pudo mas y salto por la ventana , 72 Horas dspues de su ultima visita ... NO APLICARON PROTOCOLO ALGUNO ANTISUICIDIO  ,y  no encontramos la ayuda necesaria por la falta de medios y profesionales especializados en los centros públicos de sanidad, y la saturacion de los  centros privados los cuales tienen entre 4 y 6 semanas de...<span><a href="./ficha-peticion1.html">Leer más</a></span></p>
                            <p class="card-text"><small class="text-muted">Subido hace 3 mins</small></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <img src="./images/pLiIXcLiYohBJKF-800x450-noPad.jpg" class="img-fluid" alt="a">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row g-0">

                    <div class="col-md-12 col-lg-8">
                        <div class="card-body">
                            <h5 class="card-title">No al desempoderamiento de las viudas: ¡Nos quitan la mitad de la pensión!</h5>
                            <p class="card-text">Soy viuda y he trabajado toda mi vida en el hogar. Hace unos meses falleció mi marido y como te puedes imaginar el duelo no está siendo fácil. Ahora se habla mucho del empoderamiento de las mujeres, pero… ¿y el desempoderamiento de las viudas? Se nos muere nuestro amor, compañero de vida, nuestro todo y nos quedamos con los créditos que pedimos hace unos meses, la contribución, la luz, el agua, el gas y todo casi como antes, sin embargo solas, pero el Estado nos reduce la pensión a la mitad, ni es justo ni lo ha sido nunca, pero está enquistado en la sociedad, y como siempre ha sido así, pues vale, nooo, no vale, hay que ser justos y sobre todo en el peor momento...<span><a href="#">Leer más</a></span></p>
                            <p class="card-text"><small class="text-muted">Subido hace 4 horas</small></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <img src="./images/GoeYyqdkUCDqOZe-800x450-noPad.jpg" class="img-fluid" alt="a">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-12 col-lg-8">
                        <div class="card-body">
                            <h5 class="card-title">Justicia para Shireen Abu Aqleh, periodista palestina asesinada por el ejército israelí</h5>
                            <p class="card-text">Mi nombre es Jalida Ahmed Baba, una ciudadana de origen saharaui que ha crecido admirando el coraje y la valentía de la periodista palestina Shireen Abu Aqleh, asesinada ayer, 11 de mayo, por el ejército israelí. Gracias a ella conocí y profundicé en el proceso de ocupación de Palestina que siempre he seguido de cerca. Era un referente para millones de árabes en todo el mundo y ha sido brutalmente asesinada por las fuerzas israelíes mientras cubría los disturbios en el campo de refugiados de Jenin. Las fuerzas israelíes dispararon “deliberadamente” y “a sangre fría” contra la periodista...<span><a href="#">Leer más</a></span></p>
                            <p class="card-text"><small class="text-muted">Subido hace 1 mes</small></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <img src="./images/ClwtpMkteSmpZIQ-800x450-noPad.jpg" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-12 p-0">
                <a href="./peticiones.html">
                    <input type="button" class="btn btn-outline-secondary w-100" value="Ver más">
                </a>
            </div>
        </div>
@endsection
