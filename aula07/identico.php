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
        $a = 3;
        $b = "3";
        $mostratipo = gettype($b);
        $resultadoIgualdade = ($a == $b) ? "Sim" : "Não";
        $resultadoIdentico = ($a === $b) ? "Sim" : "Não";
        
        echo "A variável a = $a é igual a b = $b ? $resultadoIgualdade <br>"; 
        echo "A variável a = $a é idêntica a b = $b ? $resultadoIdentico <br>"; 
        echo "mostrando o tipo da variável $b: $mostratipo"
    ?>
    </div>
</body>
</html>