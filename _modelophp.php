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
        $n1 = $_GET["x"];
        $n2 = $_GET["y"];

        echo "<h2> Os valores recebidos foram $n1 e $n2</h2>";

        echo "Absotulo de $n2 ". abs($n2);
        echo "<br> o valor de $n1 <sup>$n2</sup> é ". pow($n1, $n2);
        echo "<br> a raiz de $n1 é ". sqrt($n1);
        echo "<br> O valor de $n2 arredondado é ". floor($n2); 
                                                  //ceil: sempre arredonda pra cima
                                                  //Floor: sempre para baixo
        echo "<br> O valor de $n1 em moeda é R$". number_format($n1, 2, ",",".");


    ?>
</div>
</body>
</html>
