<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Estruturas Condicionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $anoNascimento = $_GET["anoNascimento"];
            $idade = date("Y") - $anoNascimento;
            
            $tipoVoto = '';
            
            if ($idade < 16) {
                $tipoVoto = "Proibido votar";
            } 
            else {
                if ($idade < 18 || $idade >= 65) {
                    $tipoVoto = "Voto facultativo";
                }
                else {
                    $tipoVoto = "Voto obrigatório";
                }
            }


            echo "Você tem $idade anos. Sobre votar: $tipoVoto.";

        ?>  
        <br>
        <a class="btn-voltar" href="02_exercicio.html">Voltar</a>
    </div>
</body>
</html>