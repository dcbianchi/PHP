<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  
  <!-- <?php
 //$ = $_GET["uf"]?$_GET["uf"]:"0";
  ?> -->

</head>
<body>
<div>
    <h2> Aula 11 - Exercicio 02 </h2>
    <?php
      $c = 10;
      while ($c > 1) {
        echo "$c ";
        $c--; //$c = $c-1
      }
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
