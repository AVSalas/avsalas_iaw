<?php

//Division

$valor1 = $_POST['dividendo'];
$valor2 = $_POST['divisor'];

  if (($valor1%$valor2)!=0) {
    echo $valor1." dividido entre ".$valor2.", su cociente vale ".intdiv($valor1,$valor2).". El resto es ".($valor1/$valor2).".";
  }
  else {
    echo $valor1." dividido entre ".$valor2." es una division exacta, y su cociente vale ".intdiv($valor1,$valor2).". El resto es ".($valor1%$valor2).".";
  }

?>
