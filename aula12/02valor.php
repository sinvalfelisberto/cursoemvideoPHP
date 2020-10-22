<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Estruturas de Repetição</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $valor = isset($_GET["valor"]) ? $_GET["valor"] : 1;
            $contador = $valor;
            $fatorial = 1;
            do {
                $fatorial = $fatorial * $contador;
                $contador--; 
            } while ($contador >= 1);

            echo "O fatorial de <span>$valor!</span> é igual a <span>$fatorial</span>.";

        ?>  
        <br>
        <a class="btn-voltar" href="01_exercicio.html">Voltar</a>
    </div>
</body>
</html>