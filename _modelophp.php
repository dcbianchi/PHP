<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  <?php
    $nome = $_GET["nome"]?$_GET["nome"]:"Anonimo";
    $AnoNasc = $_GET["AnoNasc"]?$_GET["AnoNasc"]:"1990";
    $idade = date("Y") - $AnoNasc;
  ?>
</head>
<body>
<div>
    <h2> Aula 9 - Exercicio 02 </h2>
    <?php
      if ($idade<16) {
        $v = "Não pode Votar";
      } elseif (($idade>=16 && $idade<18) || ($idade>64)){
          $v = "Voto opicional";
        } else {
          $v = "Voto Obrigatorio";
        }
      echo "$nome nasceu em $AnoNasc e tem $idade anos: <br>";
      echo "$v";
    ?>
    <br> <a href="_modelohtml.html"> Voltar </a>
</div>
</body>
</html>
