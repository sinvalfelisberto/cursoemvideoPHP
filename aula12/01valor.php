<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Estruturas Condicionais</title>
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
            } while ($contador < 1);

            echo " $contador.";
        ?>  
        <br>
        <a class="btn-voltar" href="01_exercicio.html">Voltar</a>
    </div>
</body>
</html>