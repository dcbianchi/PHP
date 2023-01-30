<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  
  <?php
    $s = $_GET["s"]?$_GET["s"]:"0";
    $f = $_GET["s"]?$_GET["f"]:"0";
    $p = $_GET["p"]?$_GET["p"]:"0";
  ?>

</head>
<body>
<div>
    <h2> Aula 11 - Exercicio 03 </h2>
    <?php
    if ($s<$f){
      $c = $s;
      do {
        echo "$c <br>";
        $c = $c + $p;
      } while ($c<=$f);
    } else {
      $c = $s;
      do  {
        echo "$c <br>";
        $c = $c - $p;
      } while ($c>=$f);
    }
      
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
