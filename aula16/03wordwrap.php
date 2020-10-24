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

                $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est saepe earum error blanditiis nisi possimus suscipit. Deleniti sequi non facilis repellendus autem amet quasi nobis, ipsa quidem sunt neque a.";
                $resultado = wordwrap($texto, 20, "<br>\n", false);
                print $resultado;
            ?>  
            <br>
            
        </div>
    </main>
</body>
</html>