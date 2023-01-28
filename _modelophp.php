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
      $a = $_GET["a"];
      $b = $_GET["b"];
      $c = $_GET["c"];
      $media = (($a+$b+$c)/3);
          
      echo "A media é ". number_format($media,1). " O ALUNO ESTA: ". ($media<7?"REPROVADO":"APROVADO");
    ?>
</div>
</body>
</html>
