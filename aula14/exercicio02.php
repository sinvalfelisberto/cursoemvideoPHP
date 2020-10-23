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
                return $a + $b;
            }


            $resultado = soma(3,19);
            print "resultado = $resultado";
        ?>  
        <br>
    </div>
</body>
</html>