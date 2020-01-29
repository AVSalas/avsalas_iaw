<?php

//Comprobador restos

$valor1 = 14;
$valor2 = 2;

  if (($valor1%$valor2)!=0) {
    echo $valor1." dividido entre ".$valor2.", su cociente vale ".intdiv($valor1,$valor2).". El resto es ".($valor1/$valor2).".";
  }
  else {
    echo $valor1." dividido entre ".$valor2." es una division exacta, y su cociente vale ".intdiv($valor1,$valor2).". El resto es ".($valor1%$valor2).".";
  }

?>
