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
        <form method="get" action="02valor.php">
            <label for='valor'>Escolha um valor</label>
            <select name="valor" id="valor">
                <?php
                    for($i = 0; $i <= 10; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <input class="btn" type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>