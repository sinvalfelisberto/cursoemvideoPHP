<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Repetições</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            
            $valor = isset($_GET["valor"]) ? $_GET["valor"] : 0;

            for($i = 0; $i <= 10; $i++) {
                $resultado = $valor * $i;
                echo "$valor x  $i = $resultado. <br>";
            }
        ?>  
        <br>
        <a class="btn-voltar" href="02_exercicio.php">Voltar</a>
    </div>
</body>
</html>