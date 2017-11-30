<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparaciones</title>
    <style media="screen">
      img {
        width: 30px;
      }
      td {
        border:1px solid black;
      }
    </style>
  </head>
  <body>

    <?php

    // Cliente de prueba para poder borrar
    // insert into reparaciones values("11","1212 DEF","2011-01-10","3131.00","PRUEBA","2011-01-08","1","PRUEBA");


      $connection = new mysqli("192.168.1.63", "root", "Admin2015", "tf", 3316);
      $connection->set_charset("uft8");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      $query="SELECT * from reparaciones;";
      if ($result = $connection->query($query)) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
      ?>

      <table style="border:1px solid black">
        <thead>
          <tr>
            <th>IdReparacion</th>
            <th>Averia</th>
            <th>Observaciones</th>
            <th>Acción</th>
        </thead>
      <?php
          while($obj = $result->fetch_object()) {
              echo "<tr>";
                echo "<td>".$obj->IdReparacion."</td>";
                echo "<td>".$obj->Averia."</td>";
                echo "<td>".$obj->Observaciones."</td>";
                echo "<td><a href='borrar.php?IdReparacion=".$obj->IdReparacion."'><img src='borrar.png' alt='borrar'></a><a href='asignar.php?IdReparacion=".$obj->IdReparacion."'><img src='usuario.png' alt='usuario'></a><a href='mostrar.php?IdReparacion=".$obj->IdReparacion."'><img src='lupa.png' alt='lupa'></a></td>";
              echo "</tr>";
          }
          $result->close();
          unset($obj);
          unset($connection);
      }
    ?>
    </table>
  </body>
</html>
