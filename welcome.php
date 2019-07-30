<?php
   include('session.php');
  // echo $login_session .'<br>';
  // echo $login_password ;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>RCD Mallorca | Página de inicio</title>
<link rel="icon" type="image/png" href="img/favicon.png">
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
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ebf1f6+0,abd3ee+50,89c3eb+51,d5ebfb+100;Blue+Gloss+%234 */
body {
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f2f9fe+0,d6f0fd+100;White+3D+%232 */
/* background: rgb(242,249,254); Old browsers */
}
a:link 
{ 
text-decoration:none; 
} 
.imagenes:hover {filter: opacity(.5);}
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
  <!-- <img src="img/pruebafondo3.jpg" class="img-fluid" id="img_fondo" style="margin-bottom:0"> -->
  <!--Carousel Wrapper-->
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
  <a class="navbar-brand" href="#">
    <img src="img/favicon.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Noticias</a>
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
<div class="container" id="pagina" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      
      <h2><a href="noticias.php">Últimas noticias</a></h2>
      <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

<!--Controls-->
<div class="controls-top">
  <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
      class="fas fa-chevron-left"></i></a>
  <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
      class="fas fa-chevron-right"></i></a>
</div>
<!--/.Controls-->

<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-multi" data-slide-to="1"></li>
  <li data-target="#carousel-example-multi" data-slide-to="2"></li>
  <li data-target="#carousel-example-multi" data-slide-to="3"></li>
  <li data-target="#carousel-example-multi" data-slide-to="4"></li>
  <li data-target="#carousel-example-multi" data-slide-to="5"></li>
</ol>
<!--/.Indicators-->

<div class="carousel-inner v-2" role="listbox" >
  <div class="carousel-item active">
        <img class="card-img-top img-fluid imagenes" src="img/camisetas.jpg"
          alt="Card image cap">
        <div class="card-body">
          <p class="card-text">El Mallorca presenta su nueva equipación    <a href="noticia1.php">Leer más</a></p>
          <!-- <a class="btn btn-primary btn-md btn-rounded">Button</a> -->
    </div>
  </div>
  <div class="carousel-item">
        <img class="card-img-top img-fluid imagenes" src="img/foto_3.jpg" width="100px"
          alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Último partido: Mallorca 1 - Poblense 1    <a href="noticia1.php">Leer más</a></p>
    </div>
  </div>
  <div class="carousel-item">
        <img class="card-img-top img-fluid imagenes" src="img/calendario1.jpg"
          alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Consulta aquí el calendario del RCD Mallorca   <a href="noticia1.php">Leer más</a></p>
    </div>
  </div>
  <div class="carousel-item">
        <img class="card-img-top img-fluid imagenes" src="img/partido_pret.jpg"
          alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Calendario de pretemporada del RCD Mallorca   <a href="pretemporada.php">Leer más</a></p>
    </div>
  </div>
</div>

</div>
      <h4>Menú</h4>
      <!-- <p>Vea nuestras opciones</p> -->
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="noticias.php">Últimas noticias</a>
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
      <a class="twitter-timeline" data-lang="es" data-width="400" data-height="500" data-theme="light" href="https://twitter.com/RCD_Mallorca?ref_src=twsrc%5Etfw">Tweets by RCD_Mallorca</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

      </ul>
    </div>
    <div class="col-sm-8">
      <h2><a href="plantilla.php">Plantilla RCD Mallorca</a></h2>
      <!-- <h5>Title description, Dec 7, 2017</h5> -->
      <div class="fakeimg"><img class="img-fluid imagenes" src="img/fondoplantilla2.jpeg" alt="Gol del Mallorca" title="Dani Rodríguez celebrando un gol" width="100%"></div>
      <p><a href="plantilla.php">Ver plantilla</a></p>
      <p>Conoce la plantilla del Mallorca jugador a jugador y sus últimos fichajes.</p>
      <br>
      <h2><a href="calendario.php">Calendario Primera División</a></h2>
      <!-- <h5>Title description, Sep 2, 2017</h5> -->
      <div class="fakeimg"><img class="img-fluid imagenes" alt="Primera jornada de la Liga Santander" title="Jornada 1" alt="Jornada 1" src="img/calendario1.jpg" width="100%"></div>
      <p><a href="pdf/calendario_primera.pdf" target="_blank">Ver el calendario completo</a></p>
      <p>Consulta el calendario completo de LaLiga Santander en la temporada 2019 - 2020 jornada a jornada.</p>
    </div>
  </div>
<hr class="barra">
<!-- Grid row -->
<div class="row">
<h2 style=" margin: 0 auto;"><a href="galeria.php">Galería de imágenes</a></h2>
  <!-- Grid column -->
  <div class="col-md-12 d-flex justify-content-center mb-5">

    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">Todas</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Partidos</button>
    <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Celebración</button>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid imagenes" src="img/galeria/liga_ascenso.jpg" alt="Ascenso RCD Mallorca">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid imagenes" src="img/galeria/invasion.jpg" alt="Ascenso RCD Mallorca">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid imagenes" src="img/galeria/gol_salva.jpg" alt="Gol Salva Sevilla">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid imagenes" src="img/galeria/tortugas.jpg" alt="Celebración en Tortugas">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid imagenes" src="img/galeria/abdon_celebracion.jpg" alt="Abdón Prats">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <!-- <div class="mb-3 pics animation all 1">
  <img class="img-fluid imagenes" src="img/galeria/abdon.jpg" alt="Abdón Prats">
  </div> -->
  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
  <img class="img-fluid imagenes" src="img/galeria/salva.jpg" alt="Abdón Prats">
  </div>
  <div class="mb-3 pics animation all 1">
  <img class="img-fluid imagenes" src="img/galeria/depor.jpg" alt="Abdón Prats">
  </div>
  <div class="mb-2 pics animation all 1">
  <img class="img-fluid imagenes" src="img/galeria/depor2.jpg" alt="Abdón Prats">
  </div>
</div>
<br>
<p style="text-align: center"><a href="galeria.php">Ver galería completa </a></p>
<!-- Grid row -->
<script>
$(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});</script>

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
<script>
localStorage.setItem("Nombre", "<?php $login_session   ?>");
localStorage.getItem("Nombre");
localStorage.setItem("usuario", JSON.stringify(<?php $login_session ?>));



</script>
</body>
</html>
