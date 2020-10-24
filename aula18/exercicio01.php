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
                    $arr = array(3, 2, 5, 9);
                    $arr[] = 7;
                    print_r($arr);

                    $arr2 = range(3, 30, 3);
                    print_r($arr2)
                ?>  
                <br>
            </pre>
            
        </div>
    </main>
</body>
</html>