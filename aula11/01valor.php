<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Estruturas Condicionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           $valor = isset($_GET["valor"]) ? $_GET["valor"] : 0;

            echo "<h1>Contagem Progressiva</h1>";

            while ($valor <= 10) {
                echo "$valor<br>";
                $valor+=2;
            }
            echo "<h1>Contagem Regressiva</h1>";
            
            $valor2 = 10;
            while ($valor2 >= 1) {
                echo $valor2 . "<br>";
                $valor2 -= 2 ;
            }
            
        ?>  
        <br>
        <a class="btn-voltar" href="01_exercicio.html">Voltar</a>
    </div>
</body>
</html>