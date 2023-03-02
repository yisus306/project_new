<?php 
  $host = "localhost";
  $user = "root";
  $pass = "LOKOTE2000";
  $db = "empresa";

  $Conexion = new mysqli($host, $user, $pass, $db);

  if (!$Conexion){    
          die("Connection failed:".mysqli_connect_error());
  }  
  else{
     /* echo "Conexion Exitosa"; */
  }

?>
