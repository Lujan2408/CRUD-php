<?php 

require_once 'conexion.php';

function update_user ( int $id_usuario, string $nombre, string $apellido, string $correo, int $telefono ) {
  global $conexion;

  $sql = "SELECT * FROM tbl_users WHERE id_usuario = 1";
  $result = $conexion->query($sql);
  if ($result->num_rows > 0) {
    $sql = "UPDATE tbl_users 
    SET 
    nombre = '$nombre',
    apellido = '$apellido',
    correo = '$correo',
    telefono = '$telefono'
     WHERE id_usuario = '$id_usuario'";

    if ($conexion->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $sql . "<br>" . $conexion->error;
    }
  } else {
    echo "Id doesn't exist";
  } 
} 

update_user(1, "Beatriz", "Luján", "correo@correo.com", "3104345957");


?> 