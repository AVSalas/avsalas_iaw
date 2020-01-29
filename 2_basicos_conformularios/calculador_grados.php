<?php

//Conversor grados

$celsius = $_POST['grados'];
$kelvin = 273 + $celsius;
$fahrenheit = 1.8 * $celsius + 32;
  echo $celsius." grados Celsius son ".$fahrenheit." grados Fahrenheit y ".$kelvin." grados Kelvin.";

?>
