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
    $tabla = array("A"=>1,"B"=>2,"C"=>3,"D"=>4,"E"=>5,"F"=>6,"G"=>7,"H"=>8,"I"=>9);
    echo "<table style='border: 1px solid black'>";
    foreach ($tabla as $key => $value) {
      if ($value==1) {
        echo "<tr>";
        echo "<td style='width:50px;height:50px'>".$key." : ".$value."</td>";
      }
      elseif ($value<=2) {
        echo "<td style='width:50px;height:50px'>".$key." : ".$value."</td>";
      }
      elseif ($value==3) {
        echo "<td style='width:50px;height:50px'>".$key." : ".$value."</td>";
        echo "</tr><tr>";
      }
      elseif ($value<=5) {
        echo "<td style='width:50px;height:50px'>".$key." : ".$value."</td>";
      }
      elseif ($value==6) {
        echo "<td style='width:50px;height:50px'>".$key." : ".$value."</td>";
        echo "</tr><tr>";
      }
      elseif ($value<=8) {
        echo "<td style='width:50px;height:50px'>".$key." : ".$value."</td>";
      }
      elseif ($value==9) {
        echo "<td style='width:50px;height:50px'>".$key." : ".$value."</td>";
        echo "</tr>";
      }
    }
    echo "</table>";
    ?>

    /*
    $v=[["A" =>1,"B"=>2,"C"=>3],["D"=>4,"E"=>5,"F"=>6],["G"=>7,"H"=>8,"I"=>9]];
    echo "<table style='border: 1px solid black'>";
      for ($i=0; $i < 3; $i++) {
        echo "<tr>";
          foreach ($v[$i] as $k => $va) {
            echo "<td>".$k." : ".$va."</td>";
          };
        echo "</tr>";
      };
    echo "</table>";
    */

  </body>
</html>
