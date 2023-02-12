<?php 


  include_once('Conexion.php');

  $imagenSrc = $_POST['imagen_src'];
  $imagen = file_get_contents($imagenSrc);

  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email= $_POST['email'];
  $password = $_POST['password'];
  $rol = $_POST['rol'];
  $status = $_POST['status'];

  $image = mysqli_real_escape_string($Conexion, $imagen);
  $sql = "insert into users (nombre,apellidos,email,password,rol,status, imagen) values('$nombre','$apellidos','$email','$password','$rol','$status', '$image');";

  if ($Conexion->query($sql)){
    header('location: Principal.php');
  }

?>
