<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Practica 5 php</title>
  </head>
  <body>
    <?php
    echo "<h4>Ejercicio 5 </h4>";
    echo "<table>";
    $d=0;
    for ($w=1;$w<=10;$w++) {
    echo "<tr>";
    for ($q=1;$q<=10;$q++) {
      if ($d%2==0) {
        echo "<td style='background-color:grey;width:50px;height:50px'></td>";
      }
      elseif ($d%2==1) {
        echo "<td style='background-color:red;width:50px;height:50px'></td>";
      }
      $d++;
    }
    $d++;
    echo "</tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>
