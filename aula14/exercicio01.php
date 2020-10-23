<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Curso Em Video</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            function soma($a, $b) {
                $soma = $a + $b;
                print "<p>A soma de $a e $b é igual a $soma. <p>";
            }
            
            soma(13, 7);
            soma(8, 379);
            soma(45, 995);
        ?>  
        <br>
    </div>
</body>
</html>