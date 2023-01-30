<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
</head>
<body>
<div>
    <h2> Aula 13 - Exercicio 02 </h2>
    <h3>É primo?</h3>
    <?php
      $n = $_GET["n"]?$_GET["n"]:"1";
      $m = 0;
      echo "<strong>$n</strong><br>";
      echo "Valores Multiplos: ";
      for ($c=1;$c<=$n;$c++){
        if ($n%$c==0){
          $m++;
          echo "$c ";
        }
      }
      echo "<br> Total de multiplos: $m";
      if ($m==2){
        echo "<br> $n É primo";
      } else { 
        echo "<br> $n Não é primo";
      }
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>

</div>
</body>
</html>
