<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Practica 3 php</title>
  </head>
  <body>
    <?php
    echo "<h4>Ejercicio 3 </h4>";
    $mes = date(F);
    if ($mes == "August") {
      echo "Es agosto, asi que hace mucho calor";
    }
    else {
      echo "No es agosto, al menos no en el pico de calor";
    }
    ?>
  </body>
</html>
