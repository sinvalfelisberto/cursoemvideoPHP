<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Operadores de Atribuição</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $valor1 = $_GET["x"];
        
        $valor1_convertido = number_format($valor1, 2, ',', '.');
        echo "<h1>Valor do Produto: R$ $valor1_convertido</h1>";
        echo "O valor do produto com 10% de desconto é: R$ " . "<strong>" .number_format(($valor1 * 0.9), 2, ',', '.') . "</strong>";
        echo "<br>O valor do produto com 10% de aumento é: R$ " . "<strong>" .number_format(($valor1 * 1.1), 2, ',', '.') . "</strong>";

        
    ?>
    </div>
</body>
</html>