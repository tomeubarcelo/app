<?php
   include('session.php');
  // echo $login_session .'<br>';
  // echo $login_password ;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>RCD Mallorca | Noticias</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/styleMain.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="icon" type="image/png" href="img/favicon.png">
  <style>

#img_fondo {
    vertical-align: middle;
    border-style: none;
    width: -webkit-fill-available;
}
#video {
 position: absolute;
 left: 0;
 top: 0;
 width: 100%;
 height: auto;
 z-index: -10;
 visibility: visible;
 }
 #nav_fijo {

    position: fixed;
    width: -webkit-fill-available;
    top: 0;
    z-index: 1000000000;

 }
 .fakeimg {
    height: auto;
    background: #aaa;
}
.gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}
hr .barra{border: 0; height: 12px; box-shadow: inset 0 12px 12px -12px orange;}
CSS
.ir-arriba {
	display:none;
	padding:20px;
	background:#024959;
	font-size:20px;
	color:#fff;
	cursor:pointer;
	position: fixed;
	bottom:20px;
	right:20px;
}

.ir-arriba {
  z-index: 2000000;
	display:none;
	padding:20px;
	background:#024959;
	font-size:20px;
	color:#fff;
	cursor:pointer;
	position: fixed;
	bottom:10px;
	right:20px;
}
a:link 
{ 
text-decoration:none; 
} 
.imagenes:hover {filter: opacity(.5);}
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ebf1f6+0,abd3ee+50,89c3eb+51,d5ebfb+100;Blue+Gloss+%234 */
body {
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f2f9fe+0,d6f0fd+100;White+3D+%232 */
/* background: rgb(242,249,254); Old browsers */

}
    </style>
</head>
<body>
   <?php
   echo "<script>console.log ('Tu usuario es: $login_session')</script>";
   //echo "<script>alert ('Tu password es: $login_password ')</script>"
   ?>
<br>

<!-- <video src="video/Mallorca_ingles.mp4" width="640" height="480"id="video" loop autoplay preload muted>
</video> -->
<!-- <source src="video/Mallorca_ingles.ogg" type='video/ogg; codecs="theora,vorbis"' />
<source src="video/Mallorca_ingles.webm" type='video/webm; codecs="vp8,vorbis"' /> -->

  <!-- <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p>  -->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/fondo/prueba7.jpg"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="img/fondo/prueba6.jpg"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="img/fondo/prueba5.jpg"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
  <span class="ir-arriba icon-arrow-up2"><i id="flecha" class="fas fa-align-center"></i></span>
  <script>

$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
      scrollTop: '600px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() >0 ){
			$('.ir-arriba').slideDown(300);
// ("#flecha").removeClass("fas fa-angle-up");
// $("#flecha").addClass("fas fa-angle-down");

		} else {


		// $("#flecha").addClass("fas fa-angle-up");

			$('.ir-arriba').slideUp(300);
		}
	});
 
});</script>
<nav class="navbar navbar-fixed-top navbar-expand-sm bg-dark navbar-dark" id="nav_fijo">
  <a class="navbar-brand" href="welcome.php">
    <img src="img/favicon.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="plantilla.php">Plantilla</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calendario.php">Calendario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeria.php">Galería</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Pestaña</a>
      </li> -->
      <!-- <li class="nav-item">
      <div class="dropdown">
         <a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" href="#">
            <?php
            //echo $login_session;
            ?> 
         </a>
            <div class="dropdown-menu">
               <a class="dropdown-item" href="#">Perfil</a>
               <a class="dropdown-item" href="#">Ajustes</a>
               <a class="dropdown-item" href="#">Link 3</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href = "logout.php">Cerrar sesión</a>
            </div>
      </div>
      </li> -->
      <!-- <li class="nav-item">
      <a class="nav-link" href = "logout.php">Sign Out</a>
      </li> -->
</ul>
 
   <!-- parte del menu en la izquierda -->
   <ul class="nav navbar-nav navbar-right" style="right: 50px; position: absolute;">
   <li class="dropdown nav-item" id="opcionPerfil" style="color:azure">
   <a style="color:azure" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><?php
            echo $login_session;
            ?> <span class="caret"></span></a>
            <?php
            //echo $login_session;
            ?> 
         </a>
            <div class="dropdown-menu" style="left: -50px;">
               <a class="dropdown-item" href="profile.php">Perfil</a>
               <a class="dropdown-item" href="pdf/ayuda_al_usuario.pdf">Ayuda</a>
               <!-- <a class="dropdown-item" href="#">Link 3</a> -->
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href = "logout.php">Cerrar sesión</a>
            </div>
      </li>
      </ul>
</div> 
</nav>
<script>
// $(document).ready(function(){
//     $(".dropdown").hover(            
//         function() {
//             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
//             $(this).toggleClass('open');        
//         },
//         function() {
//             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
//             $(this).toggleClass('open');       
//         }
//     );
// });
</script>

   
<!-- <div class="bg-image"></div> -->
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">

      <!-- <p>Vea nuestras opciones</p> -->
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Últimas noticias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="plantilla.php">Plantilla</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendario.php">Calendario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeria.php">Galería</a>
        </li>
        <hr class="barra">
      </ul>

      <hr class="d-sm-none">
      <ul class="nav nav-pills flex-column">
      <a class="twitter-timeline" data-lang="es" data-width="400" data-height="1600" data-theme="light" href="https://twitter.com/RCD_Mallorca?ref_src=twsrc%5Etfw">Tweets by RCD_Mallorca</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

      </ul>
    </div>
    <!--seccion noticias-->
    <div class="col-sm-8">
    <h2><a href="noticia1.php">El Mallorca presenta sus camisetas de Primera</a></h2>
      <!-- <h5>Title description, Sep 2, 2017</h5> -->
      <div class="fakeimg"><img class="img-fluid imagenes" alt="Presentación camisetas"
       title="El RCD Mallorca presenta sus camisetas" src="img/camisetas.jpg" width="100%"></div>

      <p>El Real Mallorca ya luce sus camisetas de la temporada 2019-20, la del retorno a Primera División. 
          <a href="noticia1.php">Continuar leyendo</a></p>
      <hr class="barra">
      
      <h2><a href="noticia2.php">El Real Mallorca no puede con el Poblense</a></h2>
      <!-- <h5>Title description, Dec 7, 2017</h5> -->
      <div class="fakeimg"><img class="img-fluid imagenes" src="img/gol_joansastre.jpg"
       alt="Gol del Mallorca" title="Joan Sastre y Salva Sevilla se abrazan tras fabricar el 1-0 del Real Mallorca ante el Poblense este domingo en Son Bibiloni." width="100%"></div>
      <!-- <p><a href="plantilla.php">Ver plantilla</a></p> -->
      <p>El Real Mallorca sigue engrasando su maquinaria en la pretemporada y ha saldado su tercer ensayo con un empate 
          (1-1) ante el Poblense en Son Bibiloni. Un gol de Joan Sastre a los 24 minutos de juego tras una buena 
          combinación con Salva Sevilla ha abierto un marcador que ha nivelado Mateu Ferrer en el minuto 89.
          <a href="noticia2.php">Continuar leyendo</a>
      </p>
      <hr class="barra">

    <h2><a href="calendario.php">El Mallorca ya conoce su calendario en Primera División</a></h2>
      <!-- <h5>Title description, Sep 2, 2017</h5> -->
      <div class="fakeimg"><img class="img-fluid" alt="Primera jornada de la Liga Santander" 
      title="Jornada 1" src="img/calendario1.jpg" width="100%"></div>
      <p><a href="pdf/calendario_primera.pdf" target="_blank">Ver el calendario completo</a></p>
      <p>Consulta el calendario completo de LaLiga Santander en la temporada 2019 - 2020 jornada a jornada
          <a href="calendario.php"> aquí.</a> </p>
    </div>
  </div>

<!-- 
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div> -->
<hr class="barra">

<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Contacto</h5>
        <p>Tomeu Barceló</p>
        <p>tomeu.95@gmail.com</p>
        <p>Palma Web Dual</p>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Mapa web</h5>

        <ul class="list-unstyled">
          <li>
            <a href="noticias.php">Noticias</a>
          </li>
          <li>
            <a href="plantilla.php">Plantilla</a>
          </li>
          <li>
            <a href="calendario.php">Calendario</a>
          </li>
          <li>
            <a href="galeria.php">Galería</a>
          </li>
          <!-- <li>
            <a href="#!">Link 4</a>
          </li> -->
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <!-- <h5 class="text-uppercase">Links</h5> -->

        <ul class="list-unstyled">
          <li>
            <a href="#!"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#!"><i class="fab fa-facebook"></i></a>
          </li>
          <li>
            <a href="#!"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="#!"><i class="fab fa-google"></i></a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://tomeu.260mb.net" target="_blank"> Tomeu Barceló </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>
