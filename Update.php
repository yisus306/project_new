<?php 

if (isset($_POST['btnUpdate']))
{
    include_once('Conexion.php');

    $id = $_POST['uuid_user'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $status = $_POST['status'];

    $sql = "update users set nombre='$nombre', apellidos ='$apellidos', email='$email', password='$password', rol = '$rol',status= '$status' where uuid_user = '$id'";

    if($Conexion->query($sql))
        {
            header('location:Principal.php');
        }
    else
        echo "Hubo un problema de consulta sql: ".$sql;


}




?>


