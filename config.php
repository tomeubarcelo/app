<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'users_app');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if ($db->connect_errno){
      die('error de conexcion: '. mysqli_connect_error());
  } else {
    //   echo "<div id='status'>Conectado a la BBDD</div>";
    //   echo "<hr>";
  }
?>