<?php
include'conexion.php';

    $title=$_POST['title'];
    $content=$_POST['content'];
    $date= $_POST['date'];
     //Instrucción para insertar en la tabla
    $query="INSERT INTO postear (title,content,date) VALUES('$title','$content','$date')";
      //ejecutar instrucción
    $result = $conexion->query($query);

    if($query){
      header("Location: tabla.php");

    }
    else {
      echo "no se insertó correctamente";
    }
 ?>
