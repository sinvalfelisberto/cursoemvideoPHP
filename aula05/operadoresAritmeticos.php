<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $media = ($n1 + $n2) / 2;

        echo "<h1>Valores Recebidos: $n1 e $n2</h1>";
        echo "A soma de $n1 e $n2 é igual a ".($n1 + $n2);
        echo "<br>A Subtração de $n1 e $n2 é igual a ".($n1 - $n2);
        echo "<br>A Multiplicação de $n1 e $n2 é igual a ".($n1 * $n2);
        echo "<br>A Divisão de $n1 e $n2 é igual a ".($n1 / $n2);
        echo "<br>O resto(módulo) de $n1 e $n2 é igual a ".($n1 % $n2);
        echo "<br>A raiz quadradra de $n1 e $n2 é igual a ".($n1 ** $n2);
        echo "<br>A média entre $n1 e $n2 é igual a $media."
    ?>
    </div>
</body>
</html>