<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Comparações em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $nome = "Sinval Felisberto";
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];

        $media = ($nota1 + $nota2) / 2;

        echo "Aluno: $nome <br>1ª Nota: $nota1 <br>2ª Nota: $nota2 <br>A média do aluno é $media. <br>A situação do aluno é: " . (($media >= 7) ? "Aprovado!" : "Reprovado" );
        
    ?>
    </div>
</body>
</html>