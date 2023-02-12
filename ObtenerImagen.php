<?php


  include_once('Conexion.php');

  $id = $_GET['uuid'];
print_r($id);
  $sql = "SELECT users.imagen FROM users WHERE users.uuid_user = $id";
  $result = mysqli_query($Conexion, $sql);
  $row = mysqli_fetch_assoc($result);
  $image = $row['imagen'];

// Convertir el objeto BLOB a un formato de imagen
$img = imagecreatefromstring($image);

// Imprimir el contenido de la imagen en el cuerpo de la p‡gina HTML
header('Content-Type: image/jpeg');
imagejpeg($img);

// Liberar la memoria utilizada por la imagen
imagedestroy($img);
  // Enviar el contenido de la imagen con la cabecera adecuada
  return $img;
?>
