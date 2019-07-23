<?php
include'conexion.php';
    $id=$_REQUEST['id'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $date= $_POST['date'];
     //Instrucción para insertar en la tabla
    $query="UPDATE postear SET title='$title', '$content', '$date' WHERE id='$id'";
      //ejecutar instrucción
    $result = $conexion->query($query);

    if($query){
      header("Location: tabla.php");

    }
    else {
      echo "no se insertó correctamente";
    }
 ?>
