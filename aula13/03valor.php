<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - Repetições</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $valor = (isset($_GET["valor"]) ? $_GET["valor"] : 0);
            $qtdMultiplos = 0;
            $vlrMultiplos = array();
            echo "<h2>Analisando o número $valor</h2>";
            
            for($i = 1; $i <= $valor; $i++){
                if($valor % $i == 0) {
                    $qtdMultiplos++;
                    array_push($vlrMultiplos, $i);
                }

            }

            print "Total de múltiplos: ". count($vlrMultiplos);
            print "<br>";

            print "Quantidade de múltiplos: ";
            #foreach ($vlrMultiplos as $value) {
            #    print "$value ";
            #}
            for ($i = 0; $i < count($vlrMultiplos); $i++) {
                print "$vlrMultiplos[$i] ";
            }
            print "<br>";

            if($qtdMultiplos > 2){
                echo "Resultado: $valor <span>NÃO É PRIMO</span>";
            }
            else {
                echo "Resultado: $valor <span>É PRIMO</span>";
            }
        ?>  
        <br>
        <a class="btn-voltar" href="03_exercicio.html">Voltar</a>
    </div>
</body>
</html>