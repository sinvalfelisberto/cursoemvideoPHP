<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 - Usando Formulários</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $nome = $_GET["nome"];
        $nascimento = $_GET["nascimento"];
        $sexo = $_GET['sexo'];
        $idade = date("Y") - $nascimento;

        echo "$nome é do sexo $sexo e possui $idade anos.";
    ?>  
        <br>
        <a class="btn-voltar" href="02_exercicio.html">Voltar</a>
    </div>
</body>
</html>