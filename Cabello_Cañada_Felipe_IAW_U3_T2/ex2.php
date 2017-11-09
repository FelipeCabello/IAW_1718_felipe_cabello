<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Practica 2 php</title>
  </head>
  <body>
    <?php
    echo "<h4>Ejercicio 2 </h4>";
    $pares = array(2,4,6,8);
    $impares = array(1,3,5,7);
    $resultado = array_merge($impares, $pares);
    var_dump($resultado);
    ?>
  </body>
</html>
