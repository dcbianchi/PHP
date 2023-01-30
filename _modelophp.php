<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  
  <?php
    $n = $_GET["n"]?$_GET["n"]:"2";
    //$f = $_GET["s"]?$_GET["f"]:"0";
    //$p = $_GET["p"]?$_GET["p"]:"0";
  ?>

</head>
<body>
<div>
    <h2> Aula 12 - Exercicio 02 </h2>
    <h3>Fatorial</h3>
    <?php
      $c = $n;
      $fat=1;
      do {
        $fat = $fat*$c;
        $c--;
      } while ($c>=1);
      echo "<h4> $n! = $fat</h4>";
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
