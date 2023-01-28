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
        echo "<h2> Aula 8 - Exercicio 3 </h2>";
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Informado";
        $ano = isset($_GET["ano"])?$_GET["ano"]:1700;
        $idade = date("Y") - $ano;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Nao informado]";
        $reg = $sexo=="Masculino"?"o":"a";

        echo "Olá $nome<br>";
        echo "Você nasceu em $ano e tem $idade anos.";
        echo "<br> e foi registrad<strong>$reg</strong> como $sexo";


        
        
    ?>
    <br>
    <a href="_modelohtml.html">Voltar</a>
</div>
</body>
</html>
