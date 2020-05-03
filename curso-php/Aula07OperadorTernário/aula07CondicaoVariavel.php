<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Operadores Relacionais</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["num1"];
            $n2 = $_GET["num2"];
            echo "Os valores informados foram: $n1 e $n2";
            $cond = ($n1 > $n2)? "$n1 é maior" : "$n2 é maior";
            echo "</br>$cond";
        ?>
    </div>
</body>
</html>