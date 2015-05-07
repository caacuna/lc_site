<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página oficial del sistema de gestion de licitaciones de Chile">
    <meta name="author" content="licitachile, webmachine, oscar coloma">
    <link rel="shortcut icon" href="assets/ico/ms-icon-144x144.png">

    <title>LicitaChile</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/soon.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-62583047-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<!-- START BODY -->
<body class="nomobile">

<!-- START HEADER -->
<section id="header">
    <div class="container">
        <header>
            <!-- HEADLINE -->
            <h1 data-animated="GoIn"><img src="assets/img/logo.png" style="width: 40%;"/></h1>
            <h1 data-animated="GoIn" style="margin-top: -30px; font-size: 50px;">Proximamente...</h1>
        </header>

        <!-- START VIDEO -->
        <div id="video">
            <p id="message"></p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nd5GcEPHXLQ?autoplay=1&controls=1&rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- END VIDEO -->

        <!-- START REGISTRATION -->
        <div class="col-lg-4 col-lg-offset-4 mt centered">
            <h4>Regístrate gratuitamente para utilizar el software en su versión beta.</h4>

            {!! Form::open(['url' => 'products', 'id' => 'registration-form', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label class="sr-only" for="InputEmail">Correo</label>
                <input type="email" class="form-control" id="InputEmail" placeholder="Ingresa tu correo" name="correo"
                       required>
            </div>
            <button type="submit" class="btn btn-info">Registrar</button>
            {!! Form::close() !!}
        </div>

        <div class="col-lg-4 col-lg-offset-4 mt centered">
            <div id="registration-alert" class="" role="alert" style="display: none;">
                <button id="registration-alert-close" type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <span id="registration-alert-icon" class=""></span>
                <span id="registration-alert-message"></span>
            </div>
        </div>
        <!-- END REGISTRATION -->

        <!-- START TIMER -->
        <div id="timer" class="col-lg-12 centered" data-animated="FadeIn">
            <h4 class="">La versión Beta estará disponible en:</h4>
            <div id="days" class="timer_box"></div>
            <div id="hours" class="timer_box"></div>
            <div id="minutes" class="timer_box"></div>
            <div id="seconds" class="timer_box"></div>
        </div>
        <!-- END TIMER -->

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <br>
                <hr width="100%;"/>
                <br>

                <h1><strong>Con LicitaChile podrás:</strong></h1>

                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row text-center">

            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-list-alt fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading"><strong>ADMINISTRAR Y GESTIONAR FÁCILMENTE</strong></h4>

                <p class="service-heading"><strong>todas las licitaciones de Mercado Público.</strong></p>
            </div>

            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-exclamation-circle fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading"><strong>RECIBIR CORREOS DE ALERTA</strong></h4>

                <p class="service-heading"><strong>del estado de tus licitaciones.</strong></p>
            </div>

            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading"><strong>AHORRAR TIEMPO</strong></h4>

                <p class="service-heading"><strong>organizando todas tus licitaciones en un sólo lugar.</strong></p>
            </div>
            <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check-square-o fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading"><strong>SELECCIONAR, CALIFICAR Y SEGUIR</strong></h4>

                <p class="service-heading"><strong>las licitaciones que te sean de mayor interés.</strong></p>
            </div>
            <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-comments-o fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading"><strong>FACILITAR TU COMUNICACIÓN INTERNA</strong></h4>

                <p class="service-heading"><strong>a través de mensajes entre usuarios.</strong></p>
            </div>

        </div>
    </div>
    <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->

    <!-- END LAYER -->
    <!-- START SLIDER -->
    <div id="slider" class="rev_slider">
        <ul>
            <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/3.jpg">
                <img src="assets/img/slider/3.jpg">
            </li>

        </ul>
    </div>
    <!-- END SLIDER -->
</section>
<!-- END HEADER -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/soon/plugins.js"></script>
<script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/soon/custom.js"></script>


<!-- jQuery Version 1.11.0 -->
<script src="assets/js/jquery-1.11.0.js"></script>


<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="assets/js/jqBootstrapValidation.js"></script>


<!-- Custom Theme JavaScript -->
<script src="assets/js/agency.js"></script>

<!-- Custom App JavaScript -->
<script src="assets/js/app.js"></script>


</body>
<!-- END BODY -->
</html>