<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
</head>
<body>
<div>
    <h2> Aula 14 - Exercicio 02 </h2>
    <h3>Rotinas</h3>
    <?php
      //$a = $_GET["a"]?$_GET["a"]:1;
      //$b = $_GET["b"]?$_GET["b"]:1;

      function soma () {
        $p = func_get_args();
        $tot = func_num_args();
        $s=0;
        for ($i=0;$i<$tot;$i++) {
          $s+=$p[$i];
        }
        return $s;
      }
    
      echo $r=soma(3, 5, 2, 8, 9, 4, );
    ?>
    <br>
    <br><a href="_modelohtml.html" class="botao"> Voltar </a>

</div>
</body>
</html>
