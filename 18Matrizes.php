<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
</head>
<body>
<div>
    <h3>Matrizes</h3>
    <table border=8><tr>
    <?php
      $m = array (
            array(6,4),
            array(5,9),
            array(3,2)
      );
     // print_r($m);
      for ($i=0;$i<=2;$i++) {
        for ($j=0;$j<=1;$j++) {
            echo "<td>". $m[$i][$j];
        }
        echo "</tr>";
      }
    ?>
    </table>


    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>

</div>
</body>
</html>
