<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Estruturas de Repetição</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           $valor = isset($_GET["valor"]) ? $_GET["valor"] : 0;

            echo "<h2>Contagem Progressiva</h2>";
            $contador = 10;
            do {
                echo "$contador, ";
                $contador--;
            } while ($contador > 1);

            echo " $contador.";
        ?>  
        <br>
    </div>
</body>
</html>