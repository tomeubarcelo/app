<?php
   include('session.php');
  // echo $login_session .'<br>';
  // echo $login_password ;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>RCD Mallorca | Cuentas</title>
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
  #status {
        color: green;
    }
    
   .fotoscard {
        border: black 1px solid;
        border-radius: 5px;
    }
    /* Float four columns side by side */
    
    .card {
        float: left;
        width: 25%;
        padding: 0 10px;
    }
    /* Responsive columns */
    
    @media screen and (max-width: 800px) {
        .card {
            width: 33.3%;
            display: block;
            margin-bottom: 20px;
        }
    }
    @media screen and (max-width: 600px) {
        .card {
            width: 50%;
            display: block;
            margin-bottom: 20px;
        }
    }
    /* Style the counter cards */
    
    .card-body {
        box-shadow: 0 4px 8px 0 rgb(130, 38, 38);
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
    }
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
  //  echo "<script>alert ('Tu password es: $login_password ')</script>"
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
      <!-- <ul class="nav nav-pills flex-column">
      <a class="twitter-timeline" data-lang="es" data-width="400" data-height="1600" data-theme="light" href="https://twitter.com/RCD_Mallorca?ref_src=twsrc%5Etfw">Tweets by RCD_Mallorca</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

      </ul> -->
    </div>
    <div class="col-sm-8">   
    <h2>Cuentas registradas</h2><br><br>
    <p>A continuación encontrarás todos los usuarios registrados en la aplicación</p>
    <!-- <br>
    <img src="img/mallorca_foto.jpg" class="img-fluid imagenes" style="margin: 0 auto" width="60%" > -->

    
    </div>
    <!--seccion noticias-->
    <div class="col-sm-12">   
    <hr class="barra">
<?php

$con = mysqli_connect("localhost","root","","users_app");
if ($con->connect_errno){
    die('error de conexcion: '. mysqli_connect_error());
} else {
    // echo "<div id='status'>".htmlspecialchars($_POST['username'])."</div>";
    // echo "<div id='status'>Conectado</div>";
    // echo "<hr>";
}
    
$sql="SELECT * FROM usuarios"; //query es la consulta de sql//
$result = $con->query($sql);
      
   if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) //crear la query de datos//

    {
      echo "<div class='img-fluid card' >";
        echo "<h5> Perfil de: ".utf8_encode($row['nombre']).'</h5>';
        echo "<img class='card-img-top fotoscard' src=".$row['foto']." width='30%' style='margin: 0 auto'>";
        echo "<div class='card-body'>";

        echo "<p class='card-text'> Nombre de usuario: ".$row['usuario'].'</p>';
        echo "<p class='card-text'> Correo: ".$row['correo'].'</p>';        
        echo "</div>";
        echo "</div>";
    }
    
    } else {
        echo "0 results";
    }

    $con->close();
?>
    </div>
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
