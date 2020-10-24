<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Curso Em Video</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <main>
    <div>
    <pre>
        <?php
            $vt = array(3, 5, 8, 2);
            // sort($vt); #ordena em asc - altera o indice
            print_r($vt);

            // rsort($vt); #ordena em desc - altera o indice
            // print_r($vt);

            // asort($vt); #ordena em asc - mantém o índice
            arsort($vt); #ordena em desc - mantém o índice
            print_r($vt);
            
            // ksort($vt); #ordena as chaves, mantém os valores
            // print_r($vt);
            
            krsort($vt);
            print_r($vt);
            
            ?>  
        <br>
    </pre>
    </div>
    </main>
</body>
</html>