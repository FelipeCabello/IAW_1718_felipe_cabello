<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Practica 1 php</title>
  </head>
  <body>
    <?php
    echo "<h4>Ejercicio 1 </h4>";
    $array = array('"A"','"B"','"C"','"D"');
    $numero=3;
    echo "<ul>";
    for ($i=0; $i < 4; $i++) {
      echo "<li>".$array[$numero]."</li>";
      $numero--;
    }
    echo "</ul>";

    ?>
  </body>
</html>
