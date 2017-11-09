<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumnos</title>
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

    <?php if (isset($_GET["email"]) && !isset($_POST["email"])) : ?>
      <form method="post">
        <fieldset>
          <legend>Informacion personal</legend>
          <span>Name:</span><input type="text" name="name" required value="<?php echo $_GET[name] ?>"> <br>
          <span>Last Name:</span><input type="text" name="lastname" required value="<?php echo $_GET[lastname] ?>"> <br>
          <span>Email:</span><input type="email" name="email" required value="<?php echo $_GET[email] ?>"> <br>
          <p><input type="submit" value="Enviar"><a href="alumnos.php?"><input type="button" value="Volver"></a></p>
        </fieldset>
      </form>
    <?php else: ?>
      <?php
        if (empty($_GET)){
          echo "No se han recivido datos del alumno";
          echo "<a href='alumnos.php?'><input type='button' value='Volver'></a>";
        } else {
          echo "<h1>Nuevos Datos</h1>";
          echo "<b>Name: </b>".$_POST["name"]."<br>";
          echo "<b>LastName: </b>".$_POST["lastname"]."<br>";
          echo "<b>Email: </b>".$_POST["email"]."<br>";
          echo "<p><a href='alumnos.php?'><input type='button' value='Volver'></a></p>";
        }
      ?>

    <?php endif ?>

  </body>
</html>
