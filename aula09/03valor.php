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
            $primeiraNota = (isset($_GET["primeiraNota"]) ? $_GET["primeiraNota"] : 0);
            $segundaNota = (isset($_GET["segundaNota"]) ? $_GET["segundaNota"] : 0);
            $situacaoAluno = "";
            $media = ($primeiraNota + $segundaNota) / 2;    

            
            if($media < 4){
                $situacaoAluno = "Reprovado.";
            } 
            elseif($media < 7){
                $situacaoAluno = "em recuperação.";
            }
            else{
                $situacaoAluno = "Aprovado";
            }
           
            echo "A primeira nota foi <span>$primeiraNota</span> <br>A segunda nota foi <span>$segundaNota</span> <br>A média final é " . "<span>". number_format($media, 1, ',', '.') ."</span>";
            echo "<br>A situação do aluno é <span>$situacaoAluno</span>";
        ?>  
        <br>
        <a class="btn-voltar" href="03_exercicio.html">Voltar</a>
    </div>
</body>
</html>