<?php
$numeros = [3,7,2,5,9,1,4,10,6];
$grupo = count($numeros);
for ($i=0; $i<$grupo; $i++) {
	       echo $numeros[$i];
	        echo ", ";

          for ($j=0; $j<$grupo-1; $j++) {
            if ($numeros[$j]>$numeros[$j+1]) {
              $aux=$numeros[$j];
              $numeros[$j]=$numeros[$j+1];
              $numeros[$j+1]=$aux;
            }
          }
        }
        echo "<br/>".$numeros[0].', '.$numeros[1].', '.$numeros[2].', '.$numeros[3].', '.$numeros[4].', '.$numeros[5].', '.$numeros[6].', '.$numeros[7].', '.$numeros[8].'.';

?>
