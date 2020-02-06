<?php
// Credenciales conexion MySQL

$user = $_POST['user'];;
$pass = $_POST['pass'];
$server = "localhost";
$db = $_POST['db'];

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
