<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.php"/>
    <title>Operador identico</title>
</head>
<body>
    <div>
        <?php
            $n1 = 3;
            $n2 ="3";
            echo "Os valores informados foram: $n1 e $n2";
            $cond = ($n1 === $n2)? "SIM" : "NÃO";
            echo "</br>Os valores A e B são iguais? $cond";
        ?>
    </div>
</body>
</html>