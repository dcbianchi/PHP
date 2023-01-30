<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  
  <?php
    $n = $_GET["n"]?$_GET["n"]:"1";
    //$f = $_GET["s"]?$_GET["f"]:"0";
    //$p = $_GET["p"]?$_GET["p"]:"0";
  ?>

</head>
<body>
<div>
    <h2> Aula 12 - Exercicio 02 </h2>
    <h3>Taboada |*| </h3>
    <?php
      $c = 1;
      do {
        $t = $n*$c;
        echo "$n X $c = $t <br>";
        $c++;
      } while ($c<=10);
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
