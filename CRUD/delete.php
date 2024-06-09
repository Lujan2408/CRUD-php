<?php 

require_once('conexion.php');

function delete_user( int $id_usuario ) {
  global $conexion;

  $sql = "SELECT * FROM tbl_users  
    WHERE id_usuario = '$id_usuario'"; 
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {
        $sql = "DELETE FROM tbl_users 
        WHERE id_usuario = '$id_usuario'";
        
        if ($conexion->query($sql) === TRUE) {
            echo "El usuario se eliminó correctamente";
        } else {
            echo "No se pudo eliminar el usuario";
        }
    } else {
        echo "El usuario no existe";
    }
}

delete_user(1);

?> 