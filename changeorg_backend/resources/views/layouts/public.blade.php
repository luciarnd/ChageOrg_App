<!DOCTYPE html>
<html dir="ltr" lang="es-ES">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <title data-rh="true">La Plataforma Mundial para el Cambio · Change.org</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <script>

        $(".vermas").click(function(e){
            var cantidadRegistros = $(this).data('cantidad');
                $.ajax({
                    dataType: 'json',
                    type:'GET',
                    url: "{{ url('peticiones/"+cantidadRegistros+"') }}",
                }).done(function(data){
                    var len=data.length;
                    console.log(len);
                    var rows = '';
                    for(i=0; i<data.length; i++){
                        rows += data[i].titulo;
                    }

                    $("#morePosts").html(rows);
                })

            });
    </script>
    <style>

        * {
            font-family: "Change Calibre", "Helvetica Neue", Helvetica, Arial, Tahoma, sans-serif;
        }
        nav {
            box-shadow: 0px 1px 5px gray;
        }
        #brand {
            color: orangered;
            font-weight:700;
            font-size: 25px;
            letter-spacing: -2px;
        }

        .nav-link {
            color: black;
        }

        .nav-link:hover {
            color: orangered;
        }

        footer {
            margin-bottom: 20px;
        }

        footer ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }

        footer a {
            color: black;
            text-decoration: none;
        }

        footer li {
            padding: 5px 0px;
        }

        footer h2 {
            font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
            font-size: 16px;
            color: gray;
            font-weight: bold;
            letter-spacing: 2px;
        }

        #footer-bottom, #footer-bottom a{
            font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
            font-size: 16px;
            color: gray;
        }

        #footer-bottom li {
            padding: 0;
        }

        footer a:hover {
            color: orangered;
        }

        #footer-bottom a:hover {
            color: orangered;
            text-decoration: underline;
        }

        img {
            filter: brightness(0.8);
        }

        #home {
            height: 500px;
            align-content: center;
            justify-content: center;
            align-items: center;
        }
        #btnnaranja {
            margin-top: 20px;
            width: 170px;
            background-color: orangered;
            color: white;
        }

        #btnnaranja:hover {
            background-color: rgb(145, 43, 7) ;
        }

        #home > * {
            z-index: 2;
        }


        #home h1 {
            font-size: 50px;
            font-weight: bold;
        }

        #home:before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            opacity: 0.3;
            background-image: url('../images/depositphotos_21505583-stock-illustration-dotted-world-map.jpg');
            background-repeat: no-repeat;
            background-position: center -175px;
            background-size: 1100px 100%;
        }

        #carrousel {
            width: 80%;
            margin: auto;
            border-radius: 20px;
        }

        .carousel-inner {
            border-radius: 20px;
            box-shadow: 5px 8px 10px gray;
        }

        #peticiones {
            margin-top: 20px;
            width: 80%;
            margin: 70px auto;
        }

        #peticiones h2{
            margin-bottom: 20px;
            font-size: 22px;
        }

        .card {
            margin: 10px 0px;
        }

        .card-text {
            font-size: 13px;
        }

        .card h5 {
            font-size: 17px;
            font-weight: bold;
        }

        .card-text a {
            color: orangered;
        }

        .card-text a:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        .col-lg-4 img, .col-md-12 img {
            padding: 12px;
            border-radius: 20px;
            height: 100%;
        }

        #etiqueta {
            position: relative;
            top: 39px;
            z-index: 2;
            color: white;
            font-size: 12px;
            background-color: orangered;
            width: 120px;
            padding: 10px;
            text-align: center;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.836);
        }

        #etiqueta h3{
            font-size: 16px;
            font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 0;
        }

        label {
            font-weight: bold;
            font-size: 20px;
            margin: 8px 0px;
        }

        .form-select, .form-control {
            border: 1px solid orangered;
        }

        #peticiones {
            width: 80%;
        }

        #btnnaranja-peticion {
            margin-top: 10px;
            width: 100px;
            background-color: orangered;
            color: white;
            margin-left: 45%;
        }

        #btnnaranja-peticion:hover {
            background-color: rgb(145, 43, 7) ;
        }

        #cabecera {
            margin-top: 20px;
        }
        #cabecera h2{
            font-weight: bold;
            margin: 10px 0px;
        }

        #cabecera .col-2 {
            display: flex;
            justify-content: flex-end;
        }
        #cabecera #btnnaranja {
            margin: 10px 0px;
        }

        #ficha {
            width: 80%;
            margin: 40px auto 20px auto;
        }

        #ficha h2 {
            font-weight: bold;
            font-size: 25px;
            text-align: center;
            margin: 20px 0px;
        }

        #ficha img {
            border-radius: 20px;
            margin: 0 20px 20px 0;
            width: 100%;
        }

        #ficha h5 {
            font-weight: bold;
            font-size: 20px;
        }

        #ficha label {
            font-weight: bold;
            font-size: 15px;
        }

        #ficha #btnnaranja {
            width: 100%;
        }

        #todas-peticiones {
            margin-top: 20px;
            width: 80%;
            margin: 70px auto;
        }

        #todas-peticiones h2{
            margin-bottom: 20px;
            font-size: 22px;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        section label {
            font-weight: normal;
            font-size: 15px;
            margin: 8px 0px;
        }

        .form-check-input:checked {
            background-color: orangered;
            border-color: orangered;
        }

        .form-check-input {
            margin: 10px 0;
        }

        svg {
            width: 20px;
            height: 20px;
        }

        .col-12 nav .flex {
            display: none;
        }

        .col-12 nav {
            box-shadow: 0px 0px transparent;
        }
    </style>
</head>

<body class="type-loaded" tabindex="-1">
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}" id="brand">change.org</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('peticion/create')}}">Inicia una petición</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('mispeticiones')}}">Mis peticiones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('peticiones')}}">Más peticiones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('socios')}}">Programa de socios</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                </li>
                <?php if(Auth::check()): ?>
                <li class="nav-item me-2">
                    <a class="nav-link" aria-current="page" style="color: orangered">Hola, <?= Auth::user()->name;?></a>
                </li>
                <li class="nav-item me-2">
                    <form action="{{url('logout')}}" method="POST">
                        @csrf
                        <button class="nav-link btn" aria-current="page" type="submit">Cerrar sesion</button>
                    </form>

                </li>
                <?php else : ?>
                <li class="nav-item me-2">
                    <a class="nav-link" aria-current="page" href="{{url('login')}}">Entrar</a>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="container">
    <div class="row">
        <hr />
        <div class="col-lg-3 col-md-6">
            <h2>ACERCA DE</h2>
            <ul>
                <li><a href="#">SobreChange.org</a></li>
                <li><a href="#">Impacto</a></li>
                <li><a href="#">Empleo</a></li>
                <li><a href="#">Equipo</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6">
            <h2>COMUNIDAD</h2>
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Prensa</a></li>
                <li><a href="#">Normas de la Comunidad</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6">
            <h2>AYUDA</h2>
            <ul>
                <li><a href="#">Ayuda</a></li>
                <li><a href="#">Guías</a></li>
                <li><a href="#">Privacidad</a></li>
                <li><a href="#">Políticas</a></li>
                <li><a href="#">Cookies</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6">
            <h2>REDES SOCIALES</h2>
            <ul>
                <li><a href="https://twitter.com/change_es">Twitter</a></li>
                <li><a href="https://www.facebook.com/changeorgespana">Facebook</a></li>
                <li><a href="https://www.instagram.com/change_es">Instagram</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row" id="footer-bottom">
        <hr/>
        <span class="col-lg-9 col-md-8">
                <ul>
                    <li><strong>© 2022, Change.org, PBC</strong></li>
                </ul>
                <ul>
                    <li>Esta web está protegida por reCAPTCHA y por Google
                        <a href="https://policies.google.com/privacy">Política de privacidad</a>
                        y
                        <a href="https://policies.google.com/terms">Normas de uso</a>.
                    </li>
                </ul>
            </span>
        <div class="col-lg-2 col-md-2">
            <label>
                    <span>
                        <select class="form-select" aria-label="Selecciona el idioma">
                            <option value="de-DE">Deutsch</option>
                            <option value="en-AU">English (Australia)</option>
                            <option value="en-CA">English (Canada)</option>
                            <option value="en-IN">English (India)</option>
                            <option value="en-GB">English (United Kingdom)</option>
                            <option value="en-US">English (United States)</option>
                            <option value="es-AR">Español (Argentina)</option>
                            <option selected="" value="es-ES">Español (España)</option>
                            <option value="es-419">Español (Latinoamérica)</option>
                            <option value="fr-FR">Français</option>
                            <option value="hi-IN">हिन्दी</option>
                            <option value="id-ID">Bahasa Indonesia</option>
                            <option value="it-IT">Italiano</option>
                            <option value="ja-JP">日本語</option>
                            <option value="pt-BR">Português (Brasil)</option>
                            <option value="ru-RU">Русский</option>
                            <option value="th-TH">ภาษาไทย</option>
                            <option value="tr-TR">Türkçe</option>
                        </select>
                    </span>
            </label>
        </div>
    </div>
</footer>

<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from www.change.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Oct 2022 05:58:22 GMT -->
</html>
