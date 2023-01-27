<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
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
      $preco = $_GET["p"];
      $porc = $_GET["d"];

      echo "O preço é $preco e a porcentagem é $porc";
      echo "<br> O preço do produto é R$". number_format($preco,2,",",".");
      echo "<br> Com aumento o total fica em R$". number_format($preco + ($preco*$porc/100),2,",",".");
      echo "<br> Com desconto o total fica em R$". number_format($preco - ($preco*$porc/100),2,",",".");
      echo "<br> "

    ?>
</div>
</body>
</html>
