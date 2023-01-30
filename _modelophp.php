<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  
  <?php
    $n = $_GET["n"]?$_GET["n"]:"Gafanhoto";
    $op = $_GET["op"]?$_GET["op"]:"0";
  ?>

</head>
<body>
<div>
    <h2> Aula 10 - Exercicio 03 </h2>
    <?php
      switch ($op){
        case 1:
          $s = "Domingo";
          $p = "Não precisa ir";
        break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
          $s = "Dia da semana";
          $p = "precisa ir";
        break;
        case 7:
          $s = "Sabado";
          $p = "Não precisa ir";
        break;
      }

      echo "$n Hoje é $s <br>";
      echo "E você $p pra escola";
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
