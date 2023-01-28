<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  <?php
    $n1 = $_GET["n1"]?$_GET["n1"]:"0";
    $n2 = $_GET["n2"]?$_GET["n2"]:"0";
    $m = ($n1 + $n2) / 2;
  ?>
</head>
<body>
<div>
    <h2> Aula 9 - Exercicio 03 </h2>
    <?php
      if ($m<5) {
        $s = "REPROVADO";
      } elseif ($m>=5 & $m<7) {
          $s = "em Recuperação";
        } else {
          $s = "APROVADO";
        }
      echo "A media entre $n1 e $n2 é $m<br>";
      echo "O aluno esta $s";
    ?>
    <br>
    <button><a href="_modelohtml.html"> Voltar </a></button>
</div>
</body>
</html>
