<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Operadores Lógicos</title>
</head>
<body>
    <div>
        <?php
            $nas = $_GET["nascimento"];
            $idade = $nas - 2020;
            $status = ($idade >= 18 && $idade <= 64)?"Sim":"Não";
            echo "Você nasceu em $nas portanto tem $idade";
            echo "<br/>Você precisa votar? $status";
        ?>
    </div>
</body>
</html>