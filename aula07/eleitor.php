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
        $anoAtual = $_GET["aa"];
        $anoNascimento = $_GET["an"];

        $idade = $anoAtual - $anoNascimento;
        if($idade < 16) {
            $tipoVoto = "Não permitido";
        }
        else {
            $tipoVoto = ($idade >= 18 && $idade < 65) ? "Obrigatório" : "Facultativo"; 
        }

        echo "Você nasceu em $anoNascimento e no ano de $anoAtual você tem $idade anos. <br>";
        echo "O seu voto é <strong>$tipoVoto</strong>";
        
    ?>
    </div>
</body>
</html>