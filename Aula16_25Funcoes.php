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
        $site = "Curso em video";
        $v = explode(" ", $site);
        print_r($v);

        $texto = implode("#", $v);
        print("/n $texto");
    ?>
    <br> <a href="_modelohtml.html" class="botao"> Voltar </a>

</div>
</body>
</html>
