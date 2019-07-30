<!DOCTYPE html>
<html lang="es">
<?php
include('log.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>RCD Mallorca | Inicio sesión</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--cookies-->
      <!-- Bootstrap 4.1.1 -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">

<!-- cookiealert styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
    <!--- Include the above in your HEAD tag -->
    <style>
    .cajaMain {
    height: auto !important;
    }
    .login_btn {
    color: black;
    background-color: #FFC312;
    width: 100px;
}
</style>
    <?php
   include("config.php");
   session_start();
      // No mostrar los errores de PHP
    error_reporting(0);
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      //$sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $sql = "SELECT `usuario`,`password` FROM `usuarios` WHERE `usuario` = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['usuario'];
      $activePassword = $row['password'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($myusername == $active and $mypassword==$activePassword) {
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }else {
         $error = "Los datos no son correctos";
      }
   }
?>
   </head>
   
   <body>
    <div class="bg-image"></div>
    <div class="container cajaMain">
        <!--alert al crearte la cuenta-->
<?php
if ($_SERVER['HTTP_REFERER'] == 'http://localhost/aplicacion/wait.php') {
?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Tu cuenta ha sido creada correctamente</strong>
        <?php  
           //echo "<script>console.log ('Tu usuario es: $login_session')</script>";
            echo "<script>console.log ('su última página visitada es:  ".$_SERVER['HTTP_REFERER'].")</script>"; //ultima pagina visitada
        ?>
  </div>
<?php
}
elseif ($_SERVER['HTTP_REFERER'] == 'http://localhost/aplicacion/modifieduser.php') {
?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Tu cuenta ha sido modificada correctamente</strong>
        <?php  
            echo "<script>console.log ('su última página visitada es:  ".$_SERVER['HTTP_REFERER'].")</script>"; 
        ?>
  </div>
  <?php
}
elseif ($_SERVER['HTTP_REFERER'] == 'http://localhost/aplicacion/delete.php') {
    ?>
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Tu cuenta ha sido eliminada correctamente</strong>
            <?php  
            echo "<script>console.log ('su última página visitada es:  ".$_SERVER['HTTP_REFERER'].")</script>";
            ?>
      </div>
      <?php
    }
    elseif ($_SERVER['HTTP_REFERER'] == 'http://localhost/aplicacion/welcome.php') {
        ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Gracias por visitar nuestra página web</strong>
                <?php  
            echo "<script>console.log ('su última página visitada es:  ".$_SERVER['HTTP_REFERER'].")</script>";
                ?>
          </div>
          <?php
        }
      ?>
  <!--fin alert-->
  <br>
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Inicio sesión</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <!-- <span><i title="Entrar desde Facebook" class="fab fa-facebook-square"></i></span>
                        <span><i title="Entrar desde Google" class="fab fa-google-plus-square"></i></span>
                        <span><i title="Entrar desde Twitter" class="fab fa-twitter-square"></i></span> -->
                    </div>
                </div>
                <div class="card-body">
               
               <form  method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
               <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type = "text" name = "username" class="form-control" placeholder="Nombre usuario" required>

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type = "password" name = "password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Recordar datos
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Entrar" class="btn float-right login_btn">
                        </div>
                    </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
               <?php 
               if ( isset($_POST['username']) and isset($_POST["password"])){ 
               echo $error; 
               }
               ?>
               </div>
               </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        ¿No tienes cuenta?<a href="newuser.php">Crear cuenta</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="editaccount.php">¿Has olvidado tu contraseña?</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--cookies-->
    
<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" id="cajacookies" role="alert">
   <p> <b>Este sitio web usa cookies</b>&#x1F36A;, si permanece aquí acepta su uso.</p>
<p>Puede leer más sobre el uso de cookies en nuestra <a href="politica.html" target="_blank">política de privacidad</a>.</p>
    <button type="button" onclick="aceptarCookies()" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
        Acepto
    </button>
    </div><br>
    <div class="w3-container w3-gray" style="text-align: center">
  <h5 style="color: black"><a  href="http://tomeu.260mb.net">Tomeu Barceló</a></h5>
  <p style="color: black"><a  href="pdf/ayuda_al_usuario.pdf" target="_blank">Contacto</a></p>
  <p style="color: black; font-size: 12px">© 2019 Copyright</p>
</div>

<!-- END Bootstrap-Cookie-Alert -->

<!-- JAVASCRIPT -->

<script>
/* ésto comprueba la localStorage si ya tiene la variable guardada */
function compruebaAceptaCookies() {
  if(localStorage.aceptaCookies == 'true'){
    cajacookies.style.display = 'none';
  }
}

/* aquí guardamos la variable de que se ha
aceptado el uso de cookies así no mostraremos
el mensaje de nuevo */
function aceptarCookies() {
  localStorage.aceptaCookies = 'true';
  cajacookies.style.display = 'none';
}

/* ésto se ejecuta cuando la web está cargada */
$(document).ready(function () {
  compruebaAceptaCookies();
});
</script>

<!-- Include cookiealert script -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

</body>

</html>