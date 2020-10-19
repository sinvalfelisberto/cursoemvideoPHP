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
        $valor = $_GET["valor"];
        $srqtValor =sqrt($valor);

        echo "A raiz quadrada de $valor é igual a " . number_format($srqtValor, 2);
    ?>  
        <br>
        <a class="btn-voltar" href="01_exercicio.html">Voltar</a>
    </div>
</body>
</html>