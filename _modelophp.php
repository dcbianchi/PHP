<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP - Aprendendo</title>
  
  <?php
    $uf = $_GET["uf"]?$_GET["uf"]:"0";
  ?>

</head>
<body>
<div>
    <h2> Aula 10 - Exercicio 04 </h2>
    <?php
      switch ($uf){
        case 1:
          $reg = "Norte";
          break;
        case 2:
          $reg = "Nordeste";
          break;
        case 3:
          $reg = "Centro-Oeste";
          break;
        case 4:
          $reg = "Sudeste";
          break;
        case 5:
          $reg = "Sul";
          break;
        default:
        $reg = "errado";
      }

      echo "Fica na região $reg";
    ?>
    <br>
    <a href="_modelohtml.html" class="botao"> Voltar </a>
</div>
          
            <!-- 3 Centro-Oeste -->
            <option>Goiás</option>
            <option>Mato Grosso</option>
            <option>Mato Grosso do Sul</option>
            <option>Distrito Federal</option>
            <!-- 4 Sudeste -->
            <option>Espírito Santo</option>
            <option>Minas Gerais</option>
            <option> Rio de Janeiro</option>
            <option>São Paulo</option>
            <!-- 5 Sul -->
            <option>Paraná</option>
            <option> Rio Grande do Sul </option>
            <option>Santa Catarina</option> 






</body>
</html>
