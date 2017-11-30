<?php
$connection = new mysqli("192.168.1.63", "root", "Admin2015", "tf", 3316);
$connection->set_charset("uft8");

if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}

$query="SELECT * from reparaciones r join intervienen i on r.idreparacion = i.idreparacion join empleados e on e.codempleado=i.codempleado where i.idreparacion='".$_GET['IdReparacion']."'";
if ($result = $connection->query($query)) {
  echo "Los empleados que intervienen: <br>";
  while ($obj = $result->fetch_object()) {
    echo "- ".$obj->Nombre."<br>";
  }
}
echo "<br>";
$query2="SELECT * from reparaciones r join incluyen i on r.idreparacion = i.idreparacion join recambios re on i.idrecambio = re.idrecambio where i.idreparacion='".$_GET['IdReparacion']."'";
if ($result = $connection->query($query2)) {
  echo "Los recambios que necesarios: <br>";
  while ($obj = $result->fetch_object()) {
    echo "- ".$obj->Descripcion."<br>";
  }
  echo "<p><a href='tabla_reparaciones.php'><input type='button' name='Volver' value='Volver'></a></p>";
}

?>
