<?php 

include_once('Conexion.php');


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email= $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];
$status = $_POST['status'];

$sql = "insert into users (nombre,apellidos,email,password,rol,status) 
values('$nombre','$apellidos','$email','$password','$rol','$status');";

if ($Conexion->query($sql)){
            header('location: Principal.php');
            }
         
 

?>