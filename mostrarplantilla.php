
<!-- ">  -->
<form id="buscador" name="buscador" method="post" action="plantillabusqueda.php"> 
    <input id="buscar" name="buscar" type="search" placeholder="Buscar jugador..."  >
    <input type="submit" class="btn btn-info" name="buscador" class="boton" value="Buscar">
</form>
<!--fin buscador-->
<?php


$con = mysqli_connect("localhost","root","","rcdmallorca");
if ($con->connect_errno){
    die('error de conexcion: '. mysqli_connect_error());
} else {
    // echo "<div id='status'>".htmlspecialchars($_POST['username'])."</div>";
    // echo "<div id='status'>Conectado</div>";
    // echo "<hr>";
}
    
$sql="SELECT * FROM plantilla ORDER BY id_jugador"; //query es la consulta de sql//
$result = $con->query($sql);
      
   if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) //crear la query de datos//

    {
        echo "<div class='img-fluid card' >";
        echo "<h5 class='card-title'>".utf8_encode($row['nombre']).'</h5>';
        echo "<img class='card-img-top fotoscard' src=img/plantilla/".$row['foto']." style='width=100%' >";
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
