<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Estruturas Condicionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            for($i = 1; $i <= 10; $i++) {
                echo "$i ";
            }
            echo "<br>";

            for ($i = 10; $i >= 1 ; $i--) { 
                echo "$i ";
            }
            echo "<br>";

            for($i = 0; $i <= 50; $i += 5) {
                echo "$i ";
            }
            echo "<br>";

            for ($i= 20; $i >= 0; $i -= 2) { 
                echo "$i ";
            }
        ?>  
        <br>
        <a class="btn-voltar" href="#">Voltar</a>
    </div>
</body>
</html>