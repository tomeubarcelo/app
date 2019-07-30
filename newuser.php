<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>RCD Mallorca | Crear cuenta</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!--Made with love by Mutiullah Samim -->
    <link rel="stylesheet" type="text/css" href="styles/styleNewUser.css">
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--- Include the above in your HEAD tag -->
<style>
    .container {
    height: 100%;
    margin: 10px;
    align-content: center;
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    border: 3px solid #f1f1f1;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;
}
/* .links{
    color: blue;
}
.links:hover {
    text-decoration-line: none;
} */
    </style>
<?php
   include("config.php");
   session_start();
   // No mostrar los errores de PHP
error_reporting(0);
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $newUsername = $_POST['newUsername'];
      $newName = mysqli_real_escape_string($db,$_POST['newName']); 
      $newPassword = $_POST['newPassword']; 
      $confirmPassword = $_POST['confirmPassword']; 
      $newEmail = $_POST['newEmail']; 
      $newDate = mysqli_real_escape_string($db,$_POST['newDate']); 
      $fotoUser = 'img/foto1.png';
    echo "<script>console.log('Tu usuario es: $newUsername')</script>";
    echo "<script>console.log('Tu nombre es: $newName')</script>";
    // echo "<script>console.log('Tu password es: $newPassword')</script>";
    // echo "<script>console.log('Tu password2 es: $confirmPassword')</script>";
    echo "<script>console.log('Tu email es: $newEmail')</script>";
    echo "<script>console.log('Tu fecha es: $newDate')</script>";

    if ($newPassword == $confirmPassword){
        echo "<script>console.log('Las contraseñas coinciden')</script>";
        //aqui añado al usuario
        $sql = "INSERT INTO `usuarios`(`usuario`, `nombre`, `password`, `correo`, `foto`) 
        VALUES ('$newUsername','$newName','$confirmPassword','$newEmail', '$fotoUser')";
        echo "<script>console.log('se ha añadido a la bbdd')</script>";
        //comentado porque si funciona
        
$result = $db->query($sql);
      
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){ //crear la query de datos//
    echo $row['usuario'];
    echo $row['nombre'];
    echo $row['password'];
}
}
//codigo para redireccionarte en 2sec a login.php si te has registrado correctamente
// ob_start(); 
//   header("refresh: 2; url = login.php"); 
   
//   echo 'Espere un momento y será redireccionado...'; 

// ob_end_flush();
header ('location: wait.php');
    }
    else {
        echo "<script>console.log('Las contraseñas no coinciden')</script>";
        $errorPasswords  = "Las contraseñas no coinciden";
        echo "<script>$('#newPassword').focus(); 
        </script>";
    }
   } 
?>
</head>
    <body>
    <div class="bg-image"></div>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Crea una cuenta</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <!-- <span><i title="Entrar desde Facebook" class="fab fa-facebook-square"></i></span>
                        <span><i title="Entrar desde Google" class="fab fa-google-plus-square"></i></span>
                        <span><i title="Entrar desde Twitter" class="fab fa-twitter-square"></i></span> -->
                    </div>
                </div>
                <div class="card-body">
                <!--creacion nuevo usuario-->
                <form  method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                    <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="newUsername" id="newUsername" class="form-control" placeholder="Nombre usuario" required pattern="[A-Za-z0-9]{5,15}"
                            title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 15">
                             <!--solo se permiten letras mayus y minus y tambien numeros-->
                    </div>
                    <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-address-card"></i></span>
                            </div>
                            <input type="text" name="newName" id="newName" class="form-control" placeholder="Nombre y apellidos" required pattern="[a-zA-Z- ]{5,30}"
                            title="Solo letras. Tamaño mínimo: 5. Tamaño máximo: 30">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="newPassword" id="newPassword" class="form-control" placeholder="Contraseña" required 
                         title="La contraseña debe empezar con una letra y contener al menor un dígito">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Confirma contraseña"  required
                         title="La contraseña debe empezar con una letra y contener al menor un dígito">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-envelope-open"></i></span>
                        </div>
                        <input type="email" name="newEmail" id="newEmail" class="form-control" placeholder="Correo" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                        </div>
                        <input type="date" name="newDate" id="newDate" class="form-control" placeholder="Fecha de nacimiento" required>
                    </div>
                    <div class="form-group">
                    <button type="button" value="Atrás" class="btn float-left login_btn">
                        <a href="login.php" style="text-decoration: none; color: black">Atrás</a>
                    </button>
                        <input type="submit" value="Entrar" class="btn float-right login_btn">
                    </div>
                </form>
                <div style = "font-size:11px; color:#cc0000; margin-top:10px">
               <?php 
               if($_SERVER["REQUEST_METHOD"] == "POST") {
               echo $errorPasswords; 
               }
               ?>
               </div>
               </div><!--cierra el card body-->
               <!-- <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        ¿No tienes cuenta?<a href="newuser.php">Crear cuenta</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">¿Has olvidado tu contraseña?</a>
                    </div>
                </div> -->
        </div>
    </div><br><br>
    <div class="w3-container w3-gray">
  <h5 style="color: black"><a  href="http://tomeu.260mb.net">Tomeu Barceló</a></h5>
  <p style="color: black"><a  href="pdf/ayuda_al_usuario.pdf" target="_blank">Contacto</a></p>
  <p style="color: black; font-size: 12px">© 2019 Copyright</p>
</div>
</body>

</html>