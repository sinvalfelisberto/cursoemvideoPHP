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
            function soma() {
                $arrValores = func_get_args();
                $soma = 0;
                for ($i = 0; $i < count($arrValores); $i++){
                    $soma += $arrValores[$i];
                    
                }
                return $soma;
            }

            $resultado = soma(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            
            print "<p>A soma é igual a $resultado</p>";

            #soma(1, 2, 3, 4, 5, 6, 7, 8, 9)
        ?>  
        <br>
    </div>
</body>
</html>