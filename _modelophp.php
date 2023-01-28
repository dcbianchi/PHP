<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  <style>
    h2 {
      font: 15pt arial;
      color: #171559;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div>
    <?php
        echo "<h2> Aula 8 - Exercicio 2 </h2>";
        $n = $_GET["v"];
        $rq = sqrt($n);
        echo "<br> A raiz de $n é ". number_format($rq,2);
    ?>
    <br>
    <a href="_modelohtml.html">Voltar</a>
</div>
</body>
</html>
