<?php 
  $host = "localhost";
  $user = "root";
  $pass = ".Root123";
  $db = "empresa";

  $Conexion = new mysqli($host, $user, $pass, $db);

  if (!$Conexion){    
          die("Connection failed:".mysqli_connect_error());
  }  
  else{
     /* echo "Conexion Exitosa"; */
  }

?>
