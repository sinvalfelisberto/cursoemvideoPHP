<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Comparações em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $tipo = $_GET["op"];
        $resultado = ($tipo == 's') ? $n1 + $n2 : $n1 * $n2;

        echo "Os valores passados foram $n1 e $n2. <br>";
        echo "O tipo de operação é " . (($tipo == 's') ? "Soma" : "Multiplicação") . "<br>";
        echo "O resultado da operação é $resultado.<br>";

    ?>
    </div>
</body>
</html>