<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
</head>
<body>
<div>
    <h3>Prova</h3>
    <?php
    for($i=0; $i<=10; $i++){
      if($i % 3 == 0)
        continue;
        echo $i."-";
    }
    echo "Fim"
?>
    <br>
    
</div>
</body>
</html>
