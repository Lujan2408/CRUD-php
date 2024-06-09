<?php

require_once 'conexion.php';

$sql = "SELECT * FROM tbl_users";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id_usuario : " . $row["id_usuario "].
        " Nombre: " . $row["nombre"]. " " . $row["apellido"].
        " Numero de Telefono " . $row["telefono"] ;
    }
  } else {
    echo "0 results";
  }
?>