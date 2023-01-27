<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        echo "Os valores recebidos foram $n1 e $n2";
        echo "<br> A soma vale ". ($n1+$n2);
        echo "<br> A subitração vale ".  ($n1-$n2);
        echo "<br> A Multiplicação vale ". ($n1*$n2);
        echo "<br> A Divição vale ". ($n1 / $n2);
        echo "<br> O Modulo é ". ($n1 % $n2);
        echo "<br> a media vale ". (($n1 + $n2) /2);

        //funções matematicas
        
    ?>
</div>
</body>
</html>
 