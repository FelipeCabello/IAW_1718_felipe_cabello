<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Practica 4 php</title>
  </head>
  <body>
    <?php
    echo "<h4>Ejercicio 4 </h4>";
    $a=1;
    while ($a <= 10) {
      echo " abc ";
      $a++;
    }
    echo "<br>";
    $b=0;
    do {
      echo " xyz ";
      $b++;
    } while ($b <= 10);
    echo "<br>";
    $numero=1;
    for ($i=0; $i < 9; $i++) {
      echo $numero." ";
      $numero++;
    }
    echo "<br>";
    $letra=65;
    echo "<ol>";
    for ($i=0; $i < 6; $i++) {
      echo "<li>Item ".chr($letra)."</li>";
      $letra++;
    }
    echo "</ol>";
    ?>
  </body>
</html>
