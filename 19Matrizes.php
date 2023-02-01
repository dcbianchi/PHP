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
        echo "<h4> Vetores desordenados</h4>";
        $v = array(3, 5, 8, 2);
        print_r($v);
        sort($v);
        echo "<h4> Vetores em ordem</h4>";
        print_r($v);
        echo "<h4> Vetores em ordem decrescente</h4>";
        rsort($v);
        print_r($v);
        echo "<h4> Vetores em ordem Assossiativa</h4>";
        asort($v);
        print_r($v);
        echo "<h4>Ordem Assossiativa reversa</h4>";
        arsort($v);
        print_r($v);
        

    ?>
    </pre>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
</body>
</html>
