<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
</head>
<body>
<div>
    <h2> Aula 18 - Exercicio 01 </h2>
    <h3>Matrizes</h3>
    <?php
      $n = array (
        array(2,3),
        array(8,5),
        array(9,6)
      );
     // print_r($n);
      for ($i=0;$i<=2;$i++) {
        for ($j=0;$j<=1;$j++) {
            echo $n[$i][$j]. " ";
        }
        echo "<br>";
      }
    ?>


    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>

</div>
</body>
</html>
