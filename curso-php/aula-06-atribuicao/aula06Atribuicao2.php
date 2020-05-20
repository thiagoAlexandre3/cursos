<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercício</title>
</head>
<body>
    <div>
        <?php
            $ano = $_GET["a"];
            echo "O ano atual é $ano";
            $ano --;
            echo "</br>O ano anterior foi $ano";
        ?>
    </div>
</body>
</html>