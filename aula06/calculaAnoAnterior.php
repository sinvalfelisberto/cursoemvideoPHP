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
        $ano = $_GET["ano"];

        echo "<h1>O ano atual é $ano</h1>";
        echo "O ano anterior é ". --$ano;
        echo "<br>O próximo ano é ". ($ano+= 2);
    ?>
    </div>
</body>
</html>