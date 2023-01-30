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
    <h2> Aula 13 - Exercicio 02 </h2>
    <h3>Taboada |X| </h3>
    <?php
      for ($c=1;$c<=10;$c++){
        $t = $n*$c;
        echo "$n X $c = $t<br>";
      }
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
