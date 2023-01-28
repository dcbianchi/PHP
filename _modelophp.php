<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  
  <?php
    $n = $_GET["n"]?$_GET["n"]:"0";
    $op = $_GET["op"]?$_GET["op"]:"0";
  ?>

</head>
<body>
<div>
    <h2> Aula 10 - Exercicio 02 </h2>
    <?php
      switch ($op){
        case 1:
        break;
      }

      echo "Você escolheu $op<br>";
      echo "O resultado da operação é $r";
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
