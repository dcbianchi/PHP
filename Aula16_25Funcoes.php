<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
</head>
<body>
<div>
     
    <?php
        $nome ="   Jose da Silva   ";
        echo $nome;
        echo(strlen($nome));
        $novo = trim($nome);
        echo "<br> ". $novo;
        echo (strlen($novo));

    ?>
    <br> <a href="_modelohtml.html" class="botao"> Voltar </a>

</div>
</body>
</html>
