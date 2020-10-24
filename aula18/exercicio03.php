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
                $m = array( array(6, 4), 
                            array(4, 9), 
                            array(3, 2));

                $m[0][0] = "sorry";
                $m[2][1] = $m[0][0];
                print_r($m);



            ?>  
            </pre>
            <br>
            
        </div>
    </main>
</body>
</html>