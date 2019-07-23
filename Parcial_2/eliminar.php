<?php
include'conexion.php';
    $id=$_REQUEST['id'];

     //Instrucción para insertar en la tabla
    $query="DELETE FROM postear WHERE id='$id'";
      //ejecutar instrucción
    $result = $conexion->query($query);

    if($query){
      header("Location: tabla.php");

    }
    else {
      echo "no se insertó correctamente";
    }
 ?>
