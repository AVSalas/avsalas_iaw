<?php

$n1=3; $n2=1; $n3=2; $n4=4; $aux;

if ($n3>$n4) {
  $aux=$n4;
  $n4=$n3;
  $n3=$aux;
}
echo $n3." | ".$n4;
echo "<br/>";
echo "<br/>";
echo "primera vuelta: ".$n1." | ".$n2." | ".$n3." | ".$n4;
echo "<br/>";
echo "<br/>";

if ($n2>$n3) {
  $aux=$n3;
  $n3=$n2;
  $n2=$aux;
}
echo $n2." | ".$n3;
echo "<br/>";
echo "<br/>";
echo "segunda vuelta: ".$n1." | ".$n2." | ".$n3." | ".$n4;
echo "<br/>";
echo "<br/>";

if ($n1>$n2) {
  $aux=$n2;
  $n2=$n1;
  $n1=$aux;
}
echo $n1." | ".$n2;
echo "<br/>";
echo "<br/>";
echo "tercera vuelta: ".$n1." | ".$n2." | ".$n3." | ".$n4;
echo "<br/>";
echo "<br/>";

if ($n3>$n4) {
  $aux=$n4;
  $n4=$n3;
  $n3=$aux;
}
echo $n3." | ".$n4;
echo "<br/>";
echo "<br/>";
echo "cuarta vuelta: ".$n1." | ".$n2." | ".$n3." | ".$n4;
echo "<br/>";
echo "<br/>";

if ($n2>$n3) {
  $aux=$n3;
  $n3=$n2;
  $n2=$aux;
}
echo $n2." | ".$n3;
echo "<br/>";
echo "<br/>";
echo "quinta vuelta: ".$n1." | ".$n2." | ".$n3." | ".$n4;
echo "<br/>";
echo "<br/>";

if ($n3>$n4) {
  $aux=$n4;
  $n4=$n3;
  $n3=$aux;
}
echo $n3." | ".$n4;
echo "<br/>";
echo "<br/>";
echo "resultados totales: ".$n1." | ".$n2." | ".$n3." | ".$n4;
echo "<br/>";
echo "<br/>";

?>
