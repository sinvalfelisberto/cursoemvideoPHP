<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Curso Em Video</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <main>
        <div style="font-size: 0.8rem; line-height: 1.05rem;">
            <?php
    
                print "<h3>Passagem por Valor</h3>";
                print "<p>As alterações que acontecerem na função não interferem no valor de variável passada como parâmetro.</p>";
                #passagem por valor
                function teste($a) {
                    $a += 2;
                    print $a;
                }
                echo '<span>funcion teste($a) {<br>
                    $a += 2;<br>
                    print $a; <br>
                } <br><br></span>';
    
                print '$a = 10';
                $a = 10;
                print "<br>";
    
                print 'teste($a); //retornando ';
                teste($a);
                print "<br>";
                print 'print($a); //retornando ';
                print $a;
    
                print "<h3>Passagem por Referência</h3>";
                print "<p>As alterações que ocorrerem dentro da função seram replicadas na variável passada como parâmetro. A função referencia a variável.</p>";
    
                #passagem por referência
                function teste2(&$b) {
                    $b += 2;
                    print $b;
                }
    
                echo '<span>funcion teste2(&$b) {<br>
                    $b += 2;<br>
                    print $b; <br>
                } <br><br></span>';
    
                print '$b = 3;';
                $b = 3;
                print "<br>";
    
                print 'teste2($b); //retornando ';
                teste2($b);
                print "<br>";
                print 'print $b; //retornando ';
                print $b;
    
            ?>  
            <br>
        </div>
    </main>
</body>
</html>