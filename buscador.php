<?php
header('Location: plantillabusqueda.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RCD Mallorca - Búsqueda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>       #status {
        color: green;
    }
    
    img {
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
    }</style>
</head>
<body>

<?php

$con = mysqli_connect("localhost","root","","rcdmallorca");
if ($con->connect_errno){
    die('error de conexcion: '. mysqli_connect_error());
} else {
    // echo "<div id='status'>".htmlspecialchars($_POST['username'])."</div>";
    // echo "<div id='status'>Conectado</div>";
    // echo "<hr>";
}
//buscador//
$busqueda = ($_POST['buscar']);
// echo "<h1>".$busqueda."</h1>";

$sql="SELECT * FROM plantilla WHERE `nombre` LIKE '%" .$busqueda. "%' ";//query es la consulta de sql//
$result = $con->query($sql);
   
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) //crear la query de datos//
 
     {
         echo "<div class='img-fluid card' >";
         echo "<h5 class='card-title'>".utf8_encode($row['nombre']).'</h5>';
         echo "<img class='card-img-top' src=img/plantilla/".$row['foto']." style='width=100%' >";
         echo "<div class='card-body'>";
 
         echo "<p class='card-text'> Dorsal: ".$row['dorsal'].'</p>';
         echo "<p style='font-size:14px' class='card-text'> Pos: ".$row['posicion'].'</p>';
         // echo "<p> Fecha de nacimiento: ".$row['fecha_nacimiento'].'</p>';
         // echo "<p>".$row['avatar'].'</p>';
         echo "</div>";
         echo "</div>";
 
     }
     
     } else {
         echo "0 results";
     }
 
     $con->close();
?>


</body>
</html> 
