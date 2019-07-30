<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>RCD Mallorca | Editar cuenta</title>
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
    /* top: 60%; */
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;
}
    </style>
    <?php
   include("config.php");
   session_start();
   // No mostrar los errores de PHP
error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST") {

$actualUsername = $_POST['actualUsername'];
$actualEmail = $_POST['actualEmail'];
$newCountPassword = $_POST['newCountPassword'];
$confirmCountPassword = $_POST['confirmCountPassword'];

echo "<script>console.log('Tu usuario es: $actualUsername')</script>";
echo "<script>console.log('Tu correo es: $actualEmail')</script>";
// echo "<script>console.log('Tu contraseña nueva será: $newCountPassword')</script>";
// echo "<script>console.log('Confimacion de nueva contraseña: $confirmCountPassword')</script>";

if ($newCountPassword == $confirmCountPassword){
    echo "<script>console.log('Las contraseñas coinciden')</script>";
     //aqui añado al usuario
     $sql = "UPDATE `usuarios` SET `password`='$confirmCountPassword' WHERE `usuario` = '$actualUsername' and
     `correo` = '$actualEmail'";
     echo "<script>alert('se ha añadido a la bbdd')</script>";
     //comentado porque si funciona
     $result = $db->query($sql);
      
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){ //crear la query de datos//
    echo $row['usuario'];
    echo $row['nombre'];
    echo $row['password'];
}
}

header ('location: modifieduser.php');

}

else {
    echo "<script>console.log('Las contraseñas no coinciden')</script>";
    $errorPasswords  = "Las contraseñas no coinciden";
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
                            <input type="text" name="actualUsername" id="actualUsername" class="form-control" placeholder="Nombre usuario actual" required pattern="[A-Za-z0-9]{5,15}"
                            title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 15">
                             <!--solo se permiten letras mayus y minus y tambien numeros-->
                    </div>
                    <!-- <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-address-card"></i></span>
                            </div>
                            <input type="text" name="newName" id="newName" class="form-control" placeholder="Nombre y apellidos" required pattern="[a-zA-Z- ]{5,30}"
                            title="Solo letras. Tamaño mínimo: 5. Tamaño máximo: 30">
                    </div> -->
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-envelope-open"></i></span>
                        </div>
                        <input type="email" name="actualEmail" id="actualEmail" class="form-control" placeholder="Correo" required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="newCountPassword" id="newCountPassword" class="form-control" placeholder="Contraseña nueva" required 
                         title="La contraseña debe empezar con una letra y contener al menor un dígito">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="confirmCountPassword" id="confirmCountPassword" class="form-control" placeholder="Confirma contraseña nueva"  required
                         title="La contraseña debe empezar con una letra y contener al menor un dígito">
                    </div>
                    <!-- <div class="input-group form-group">
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
                    </div> -->
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
    </div>
    <br><br>
    <div class="w3-container w3-gray" style="text-align: center">
  <h5 style="color: black"><a  href="http://tomeu.260mb.net" target="_blank">Tomeu Barceló</a></h5>
  <p style="color: black"><a  href="pdf/ayuda_al_usuario.pdf">Contacto</a></p>
  <p style="color: black; font-size: 12px">© 2019 Copyright</p>
</div>
</body>

</html>