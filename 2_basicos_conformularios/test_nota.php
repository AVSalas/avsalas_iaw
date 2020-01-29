<?php

//Test nota

$nota = $_POST['nota'];
switch ($nota) {
   case ($nota>=0 and $nota<2):
       echo "La nota es deficiente";
       break;
   case ($nota>=2 and $nota<5):
       echo "Es un suspenso";
       break;
   case ($nota>=5 and $nota<7):
       echo "Has aprobado";
       break;
   case ($nota>=7 and $nota<9):
       echo "Tienes un notable";
       break;
   case ($nota>=9 and $nota<10):
       echo "Sobresaliente";
       break;
};

?>
