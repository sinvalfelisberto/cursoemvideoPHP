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

                $produto = "Leite";
                $preco = "4.5";

                print "<strong>printf()</strong> - formata o texto para ser exibido. Muito semelhante ao javascript.<br>";
                print 'printf("O %s está custando R$ %.2f", $produto, $preco).<br>';
                printf("O %s está custando R$ %.2f.", $produto, $preco);



            ?>  
            <br>
            
        </div>
    </main>
</body>
</html>