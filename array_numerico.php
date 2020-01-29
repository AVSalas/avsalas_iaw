<?php
$numeros = [3,7,2,5,9,1,4,10,3];
$grupo = count($numeros);
for ($i=0; $i<$grupo; $i++) {
	       echo $numeros[$i];
	        echo ", ";

          for ($j=0; $j<$grupo; $j++) {
            if ($numeros[$j]<$numeros[$j]-1) {
              $aux=$numeros[$j];
              $numeros[$j]=$numeros[$j]-1;
              $numeros[$j-1]=$aux;

            }
          }
        }
        print_r($numeros);
?>
