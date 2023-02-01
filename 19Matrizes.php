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
    <pre>
    <?php
        echo "<br>";
        echo "<h4> Ordenação po Chave</h4>";
        $v = array("J", "A", "M", "X", "K");
        asort($v);
        print_r($v);

        ksort($v);
        print_r($v);
        

    ?>
    </pre>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
