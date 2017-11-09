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
    $variable=8;
    echo "Valor de la variable: ".$variable."<br>";
    $variable=$variable+2;
 	  echo "Mas 2. Valor de la variable: ".$variable."<br>";
    $variable=$variable-4;
    echo "Menos 4. Valor de la variable: ".$variable."<br>";
    $variable=$variable*5;
    echo "Multiplicado por 5. Valor de la variable: ".$variable."<br>";
	  $variable=$variable/3;
    echo "Dividido entre 3. Valor de la variable: ".$variable."<br>";
    $variable++;
    echo "Incrementa el valor en 1. Valor de la variable: ".$variable."<br>";
    $variable--;
    echo "Decremente el valor en 1. Valor de la variable: ".$variable."<br>";

    ?>
  </body>
</html>
