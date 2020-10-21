<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - SWITCH - Estruturas Condicionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $estado = isset($_GET["estado"]) ? $_GET["estado"] : ""; 
            $regiao = "";
            switch ($estado) {
            case "AC":
            case "AP":
            case "AM":
            case "PA":
            case "RO":
            case "RR":
            case "TO":
                $regiao = "Norte";
                break;
            case "AL":
            case "BA":
            case "CE":
            case "MA":
            case "PB":
            case "PE":
            case "PI":
            case "RN":
            case "SE":
                $regiao = "Nordeste";
            break;
            case "ES":
            case "SP":
            case "RJ":
            case "MG":
                $regiao = "Sudeste";
                break;
            case "PR":
            case "RS":
            case "SC":
                $regiao = "Sul";
                break;  
            case "DF":
            case "GO":
            case "MT":
            case "Ms":
                $regiao = "Centro-Oeste";
                break;
            case "":
                $regiao = "Clique em voltar e escolha uma opção!";
                break;
            default:
                $regiao = "Você não mora no Brasil.";
            }

            if($estado == "") {
                echo $regiao;
            }
            elseif(strlen($regiao) > 12) {
                echo "$regiao";
            }
            else {
                echo "Você mora na <span> Região $regiao</span>";
            }

        ?>  
        <br>
        <a class="btn-voltar" href="03_exercicio.html">Voltar</a>
    </div>
</body>
</html>