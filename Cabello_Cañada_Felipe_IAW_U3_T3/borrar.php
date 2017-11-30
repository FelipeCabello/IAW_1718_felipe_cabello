<?php
$connection = new mysqli("192.168.1.63", "root", "Admin2015", "tf", 3316);
$connection->set_charset("uft8");

if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}

$query="DELETE from reparaciones where IdReparacion='".$_GET['IdReparacion']."'";
if ($connection->query($query)) {
  // REDIRECCIONA INMEDIATAMENTE A LA PAGINA PRINCIPAL CUANDO
  header('Location: tabla_reparaciones.php');
} else {
  echo "Error al borrar";
}

?>
