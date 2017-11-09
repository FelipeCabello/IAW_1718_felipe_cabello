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
    $tabla = array('BlanchedAlmond'=>'#FFEBCD','CadetBlue'=>'#5F9EA0','Gray'=>'#808080','BurlyWood'=>'#DEB887','DarkOliveGreen'=>'#556B2F','HotPink'=>'#FF69B4','PapayaWhip'=>'#FFEFD5');
    echo "<table style='border: 1px solid black'>";
    echo "<tr><th style='border: 1px solid black'>Color Name</th><th style='border: 1px solid black'>Hex Code</th></tr>";
    foreach ($tabla as $key => $value) {
      echo "<tr><td style='border: 1px solid black;background-color:$value'>".$key."</td><td style='border: 1px solid black;background-color:$value'>".$value."</td></tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>
