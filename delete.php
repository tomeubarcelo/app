<?php
   include('session.php');
  // echo $login_session .'<br>';
  // echo $login_password ;
?>
<?php 
$sql="DELETE FROM usuarios WHERE `usuario` = '$login_session'"; //query es la consulta de sql//
$result = $db->query($sql);
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>RCD Mallorca - Eliminar cuenta</title>
  <link rel="icon" type="image/png" href="img/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php
ob_start(); 
  header("refresh: 2; url = login.php"); 
   
  echo 'Espere un momento y será redireccionado...'; 

ob_end_flush();

?>


  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:80%"></div>
  </div>
</div>

</body>
</html>

