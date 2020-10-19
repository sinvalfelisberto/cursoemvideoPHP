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

        echo "Nome: $nome <br>Ano do Nascimento: $nascimento<br>Sexo: $sexo";
    ?>  
        <br>
        <a class="btn-voltar" href="01_exercicio.html">Voltar</a>
    </div>
</body>
</html>