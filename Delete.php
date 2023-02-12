<?php 

if (isset($_POST['btnDelete']))
{
    include_once('Conexion.php');

    $id = $_POST['uuid_user'];

    $sql = "delete from users where uuid_user = '$id' ";
 

    if($Conexion->query($sql))
        {
            header('location: Principal.php');
        }
    else
        echo "Hubo un problema de consulta sql: ".$sql;


}


?>


