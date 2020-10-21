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
           $valor = isset($_GET["valor"]) ? $_GET["valor"] : 0;
           $operacao = isset($_GET["operacao"]) ? $_GET["operacao"] : 1;
           $tipoOperacao = "";
           $resultado = 0;

           switch ($operacao) {
                case 1:
                    $resultado = $valor * 2;
                    $tipoOperacao = "O Dobro";
                    break;
                case 2:
                    $resultado = $valor ** 3;
                    $tipoOperacao = "O Cubo";
                    break;
                case 3:
                    $resultado = sqrt($valor);
                    $tipoOperacao = "A Raiz Quadrada";
                break;
                default:
                    echo "Erro, digite uma operação válida!";
                    break;
           }
        
           echo "$tipoOperacao do número $valor é ". number_format($resultado, 2, '.', ',');
        ?>  
        <br>
        <a class="btn-voltar" href="01_exercicio.html">Voltar</a>
    </div>
</body>
</html>