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
            $podeDirigir = '';
            $podeVotar = '';
            
            if($idade < 16) {
                $podeVotar = "Não pode votar, ";
                $podeDirigir = "e não pode dirigir.";
            } elseif($idade < 18) {
                $podeVotar = "Pode votar,";
                $podeDirigir = "mas não pode dirigir!";
            } else {
                $podeVotar = "Pode votar e";
                $podeDirigir = " pode dirigir!";
            }


            echo "Você tem $idade anos. $podeVotar $podeDirigir";

        ?>  
        <br>
        <a class="btn-voltar" href="01_exercicio.html">Voltar</a>
    </div>
</body>
</html>