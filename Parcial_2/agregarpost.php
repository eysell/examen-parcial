<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Post</title>
    <link rel="stylesheet" />
    <header>
      <h1>Welcome to This Blog</h1>
      <nav>
        <ul>
          <form class="" action="index.html" method="post">
            <input type="text" name="buscar" placeholder="Buscar.."value="">
            <input type="submit" value="New Post" />
          </form>
        </ul>

      </nav>
    </header>
    <style>
        *{
          margin: 0;
          font-family: sans-serif;
          padding: 0;
        }
        body{
          background: #eee;
        }
        header{
          display: flex;
          justify-content: space-between;
          align-items: center;
          background: purple;

        }
        #caja{
          padding-top: 50px;
          width: 2000px;
          height: 500px;
          background: white;
          box-shadow: 0 0 2px #ccc;
          margin:auto;

        }
        input[name="title"]{
          width: 580px;
          padding: 5px 10px;
          border: 1px solid #ccc;
        }
        #Content{
          width: 575px;
          height: 375px;
          padding: 5px 10px;
          border: 1px solid #ccc;
          margin-top: 20px;
        }
        input[type="submit"]{
          width: 100px;
          border: 1px;
          background: #742a40;
          font-size: 20px;
        }

    </style>
  </head>
  <body>
    <div id="caja">
      <form action="procesar_agregarpost.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" id="" placeholder="Título del post.."><br/><br/>
        <textarea name="content" id="content" rows="10" cols="115" placeholder="contenido del post"></textarea>
        <input type="submit" name="publicar" value="Publicar">
      </form>

    </div>

        </tbody>
      </table>
    </center>

  </body>
</html>
