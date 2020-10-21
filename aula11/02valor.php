<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Estruturas Condicionais</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $diaSemana = isset($_GET["diaSemana"]) ? $_GET["diaSemana"] : 0;

            switch ($diaSemana) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Hoje é dia de estudar e trabalhar!!!";
                    break;
                case 7:
                case 1:
                    echo "Hoje é dia de descansar!";
                    break;
                default:
                    echo "Dia inválido!";
            }

        ?>  
        <br>
        <a class="btn-voltar" href="02_exercicio.html">Voltar</a>
    </div>
</body>
</html>