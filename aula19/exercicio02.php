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
            $vt = array("a", "j", "e", "f");
            $qtdElementos = count($vt);
            echo "<br>O vetor tem $qtdElementos elementos.";
            print_r($vt);

            $vt[] = "B";
            $qtdElementos = count($vt);
            echo "<br>O vetor tem $qtdElementos elementos.";
            print_r($vt);
            
            array_push($vt, 15);
            $qtdElementos = count($vt);
            echo "<br>O vetor tem $qtdElementos elementos.";
            print_r($vt);
            
            array_pop($vt);
            $qtdElementos = count($vt);
            echo "<br>O vetor tem $qtdElementos elementos.";
            print_r($vt);
            
            array_unshift($vt, 15);
            $qtdElementos = count($vt);
            echo "<br>O vetor tem $qtdElementos elementos.";
            print_r($vt);
            
            array_shift($vt);
            $qtdElementos = count($vt);
            echo "<br>O vetor tem $qtdElementos elementos.";
            print_r($vt);

            
            ?>  
        <br>
    </pre>
    </div>
    </main>
</body>
</html>