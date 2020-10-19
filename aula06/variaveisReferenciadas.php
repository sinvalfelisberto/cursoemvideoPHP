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
       $a = 3;
       $b = $a;
       $b += 5;
       echo "O valor de <strong>a = $a</strong> e o valor de <strong>b = $b</strong>";
       
       $c = 3;
       $d = &$c;
       $d += 5;
       echo ". O valor de <strong>c = $c</strong> e o valor de <strong>d = $d</strong>. "
    ?>
    </div>
</body>
</html>