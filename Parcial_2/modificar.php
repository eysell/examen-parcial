<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guardar</title>
  </head>
  <body>
    <center>
      <?php
            $id=$_REQUEST['id'];
            include'conexion.php';
            $query="SELECT * FROM postear WHERE title='$title'";
            $result=$conexion->query($query);
            $row =$result->fetch_array($row)
      ?>
      <form action="proceso_modificar.php?id=<?php echo $row['id']; ?>",method="POST">

        <br/><br/><br/>
        <input type="text" REQUIRED name="title" placeholder="Título" value="<?php echo $row['title']; ?>"/><br/><br/>
        <input type="text" REQUIRED name="content" placeholder="Contenido" value="<?php echo $row['content']; ?>"/><br/><br/>
        <input type="date" REQUIRED name="date" placeholder="Fecha" value="<?php echo $row['date']; ?>"/><br/><br/>
        <input type="submit" value="Aceptar"/>
      </form>
    </center>
  </body>
</html>
