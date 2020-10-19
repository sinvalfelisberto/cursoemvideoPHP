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
        $nome = (isset($_GET["nome"]) ? $_GET["nome"] : "Não preenchido");
        $nascimento = (isset($_GET["nascimento"]) ? $_GET["nascimento"] : "Não preenchido");
        $sexo = (isset($_GET['sexo']) ? $_GET['sexo'] : "Não preenchido");
        $idade = date("Y") - $nascimento;

        echo "$nome é do sexo $sexo e possui $idade anos.";
    ?>  
        <br>
        <a class="btn-voltar" href="02_exercicio.html">Voltar</a>
    </div>
</body>
</html>