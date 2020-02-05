<?php
// Credenciales conexion MySQL

$user = "albermto";
$pass = "1234.56";
$server = "loc6alhost";
$db = "db_prdueba";

// Conexion

$conn = mysqli_connect( $server, $user, $pass, $db);
if ($conn->connect_error) {
   die ("Error de conexion. Codigo de error: ".$conn->connect_errno).".";
}
else {
  echo "Conexion realizada correctamente.";
}

// Cierre de conexion

$conn->close();

?>
