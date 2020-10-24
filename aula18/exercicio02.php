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
        <div>
            <pre>
            <?php
                $vetor = array(
                    "nome" => "Ana",
                    "idade" => 63,
                    "peso" => 53.5
                );

                $vetor["fuma"] = true;

                print_r($vetor);
                print("<br>");

                foreach($vetor as $campo => $valor) {
                    print("$campo = $valor ");
                }
            ?>  
            </pre>
            <br>
            
        </div>
    </main>
</body>
</html>