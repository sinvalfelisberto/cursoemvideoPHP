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
        <div style="font-size: 0.7rem; line-height: 1rem;">
            <?php

                $arr = array("Leite", 4.5, "1l", '24/08/2021');

                print_r($arr);
                print "<br>";
                var_dump($arr);
                print "<br>";
                var_export($arr);
            ?>  
            <br>
            
        </div>
    </main>
</body>
</html>