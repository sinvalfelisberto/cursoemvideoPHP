<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $txt = $_GET["itxt"];
        $tamanho = $_GET["itam"];
        $cor = $_GET["icor"];
        $tipotexto = $_GET["tipotexto"];

        if($tipotexto == 'negrito') {
        }
        if($tipotexto == "italico") {
            echo "<style> span.texto { font.style: italic; } </style>";
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 - Usando Formulários</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto {
            font-style: <?php echo ($tipotexto == "italic") ? "italic" : "none";  ?>;
            font-weight: <?php echo ($tipotexto == "bold") ? "bold" : "none";  ?>;
            font-size: <?php echo "$tamanho"; ?>;
            color: <?php echo "$cor"; ?>;
        }
    </style>
</head>
<body>
    <div>
    <?php
        echo "<span class='texto'> $txt </span>";
    ?>  
        <br>
        <a class="btn-voltar" href="03_exercicio.html">Voltar</a>
    </div>
</body>
</html>