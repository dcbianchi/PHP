<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  <?php
    $txt = isset($_GET["t"])?$_GET["t"]:"[Texto Generico]";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"8pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
  ?>
  <style>
    h2 {
      font: 15pt arial;
      color: #171559;
      font-weight: bold;
    }
    span.texto {
      font-size: <?php echo $tam; ?>;
      color: <?php echo $cor; ?>;
    }
  </style>
</head>
<body>
<div>
    <span class=texto> <?php echo "$txt"; ?> </span>
    <br>
    <a href="_modelohtml.html">Voltar</a>
</div>
</body>
</html>
