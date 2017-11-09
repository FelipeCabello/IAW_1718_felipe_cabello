<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de alumnos</title>
    <style media="screen">
      table,th,td  {border: 1px solid black;}
      th {width: 80px;height: 25px;}
      img {width: 25px;}
    </style>
  </head>
  <body>
    <table>
      <tr>
        <th> Nombre</th>
        <th> Apellido</th>
        <th> Correo</th>
        <th></th>
      </tr>
      <tr>
        <td> Pepe</td>
        <td> Perez</td>
        <td> pepe@perez.com</td>
        <th><a href="nuevosalumnos.php?name=Pepe&lastname=Perez&email=pepe@perez.com"><img src="lapiz.png"></a></th>
      </tr>
      <tr>
        <td>Felipe</td>
        <td>Cabello</td>
        <td>felipe@cabello.com</td>
        <th><a href="nuevosalumnos.php?name=Felipe&lastname=Cabello&email=felipe@cabello.com"><img src="lapiz.png"></a></th>
      </tr>
      <tr>
        <td>Jorge</td>
        <td>Vega</td>
        <td>jorge@vega.com</td>
        <th><a href="nuevosalumnos.php?name=Jorge&lastname=Vega&email=jorge@vega.com"><img src="lapiz.png"></a></th>
      </tr>
    </table>
  </body>
</html>
