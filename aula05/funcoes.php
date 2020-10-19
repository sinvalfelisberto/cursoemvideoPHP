<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Funções Matemáticas</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $valor1 = $_GET["x"];
        $valor2 = $_GET["y"];

        echo "<h2>Valores Recebidos: $valor1 e $valor2</h2>";
        echo "O valor absoluto de $valor2 é ". abs($valor2);
        echo "<br>O valor de $valor1 <sup>$valor2</sup> é igual a " . pow($valor1, $valor2);
        echo "<br>A raiz quadrada de $valor1 é igual a " . sqrt($valor1);
        echo "<br> O valor de $valor2 arredondado é " . round($valor2); //ceil(arredonda sempre pra cima) and floor(o inverso)
        echo "<br>A parte inteira de $valor2 é igual a " .intval($valor2);
        echo "<br>O valor de $valor1 em moeda é R$ ". number_format($valor1, 2, ',' ,'.');
    ?>
    </div>
</body>
</html>