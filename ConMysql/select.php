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

// Select
$consulta = "SELECT DEPT_NO,DNOMBRE FROM depart";
$resultado = $conn -> query($consulta);

// Consulta
if ($resultado->num_rows>0) {
  echo "<br/>";
  echo "<table>";
  echo "_-* TABLA DE RESULTADOS *-_";
  echo "<tr><td> Nº.DEPT </td> <td> NOM.DEPT </td></tr>";
  while ($fila=$resultado->fetch_assoc()) {
    echo "<tr><td>".$fila["DEPT_NO"]."</td> <td>".$fila["DNOMBRE"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "Ningun valor solicitado ha sido encontrado.";
}

// Cierre de conexion
$conn->close();
?>
