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
      $maior = $a>$b?$a:$b;

      echo $maior;

    ?>
</div>
</body>
</html>
