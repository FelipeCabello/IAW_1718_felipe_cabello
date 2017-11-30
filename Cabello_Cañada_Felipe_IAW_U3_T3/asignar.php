<?php
$connection = new mysqli("192.168.1.63", "root", "Admin2015", "tf", 3316);
$connection->set_charset("uft8");

if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}
?>
<?php if (!isset($_POST["IdReparacion"])) : ?>
  <?php
  $query="SELECT * from empleados";
  if ($result = $connection->query($query)) {
    echo "<fieldset><form method='post'><select name='CodEmpleado'>";
    while ($obj = $result->fetch_object()) {
      echo "<option value='".$obj->CodEmpleado."'>".$obj->Nombre."</option>";
    }
    echo "<input type='hidden' name='IdReparacion' value='".$_GET['IdReparacion']."'>
    <p><input type='submit' value='Asignar'></p>";
    echo "<p><a href='tabla_reparaciones.php'><input type='button' name='Volver' value='Volver'></a></p>";
    echo "</select></form></fieldset>";

  }
  ?>
<?php else: ?>
  <?php
  $CodEmpleado = $_POST["CodEmpleado"];
  $IdReparacion = $_POST["IdReparacion"];
  $query="INSERT into intervienen (CodEmpleado, IdReparacion) values($CodEmpleado, $IdReparacion)";
  if ($connection->query($query)) {
    header('Location: tabla_reparaciones.php');
  } else {
    echo "Error";
  }
  ?>
<?php endif ?>
