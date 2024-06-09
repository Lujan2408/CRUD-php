<?php

function insert_user(string $nombre, string $apellido, string $correo, int $telefono) { 
  $sql = "INSERT INTO tbl_users (nombre, apellido, correo, telefono) 
  VALUES ('$nombre', '$apellido', '$correo', '$telefono')";
  
  require_once 'conexion.php';
  
  if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
}

insert_user("David", "Cardona", "correo@correo.com", "123456789");

?>