<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  
  <?php
    $s = $_GET["S"]?$_GET["S"]:"0";
    $f = $_GET["F"]?$_GET["F"]:"0";
  ?>

</head>
<body>
<div>
    <h2> Aula 11 - Exercicio 03 </h2>
    <?php
   if ($s<$f){
      $c = $s;
      while ($c<=$f) {
        echo "$c <br>";
        $c ++;
      }
  } else {
      $c = $s;
      while ($c>=$f) {
        echo "$c <br>";
        $c--;
      }
   }
      
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
