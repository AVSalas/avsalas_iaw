<?php
// suma
  switch ($_POST['operacion']) {
    case 'suma':
      echo "Resultado: ".(($_POST['numero1'])+($_POST['numero2']));
      break;
// resta
    case 'resta':
      echo "Resultado: ".(($_POST['numero1'])-($_POST['numero2']));
      break;
// multiplicacion
    case 'multiplicacion':
      echo "Resultado: ".(($_POST['numero1'])*($_POST['numero2']));
      break;
// division
    case 'division':
      echo "Resultado: ".(($_POST['numero1'])/($_POST['numero2']));
      break;
  };
?>
<html>
  <head>
    <title>Calculadora</title>
  </head>
    <body>
      <form action="calculadora.html" method="post">
        <br/>
       <button>Calcular de nuevo</button>
      </form>
    </body>
</html>
