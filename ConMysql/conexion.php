<?php
// Credenciales conexion MySQL

$user = "alberto";
$pass = "123456";
$server = "localhost";
$db = "db_prueba";

// Conexion

$conn = new mysqli ($server, $user, $pass, $db);
if ($conn->connect_error) {
   die ("Error de conexion. Codigo de error: ".$conn->connect_errno).".";
}
else {
  echo "Conexion realizada correctamente.";
}

// Cierre de conexion

$conn->close();

?>
