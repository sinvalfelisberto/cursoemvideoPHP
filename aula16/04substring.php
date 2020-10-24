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
        <div style="font-size: 0.9rem; line-height: 1rem;">
            <?php
                $site = "Curso em Vídeo";
                $sub = substr($site, 0, 2);

                print $sub;
                print "<br>";
                
                $nome = "Amaral";
                $nomeAlt = str_pad($nome, 30, "@", STR_PAD_BOTH);
                print " Sinval $nomeAlt Felisberto";
                print "<br>";
                
                $txt = str_repeat("Php ", 5);
                print "o texto gerado foi $txt";
                print "<br>";

                $frase = "Gosto de estudar Matemática!!!";
                $novaFrase = str_replace("Matemática", "PHP", $frase);

                print $novaFrase;

            ?>  
            <br>
            
        </div>
    </main>
</body>
</html> 