<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - SWITCH - Estruturas Condicionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $valor = isset($_GET["valor"]) ? $_GET["valor"] : 0;

            echo "Tabuada de <span>$valor</span><br>";
            
            $resultado = 0;
            $contador = 0;
            do {
                $resultado = $contador * $valor;
                echo "$valor x $contador = $resultado <br>";
                $contador++;
            } while ($contador <= 10);
        ?>  
        <br>
        <a class="btn-voltar" href="02_exercicio.html">Voltar</a>
    </div>
</body>
</html>