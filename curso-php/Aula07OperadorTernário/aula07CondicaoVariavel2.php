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
            $media = ($n1 + $n2)/2;
            echo "Os valores informados foram: $n1 e $n2, e a média é: $media";
            $cond = ($media < 6)? "REPROVADO" : "APROVADO";
            echo "</br>Situação: Você foi $cond";
            /*
                Podemos simplificar ainda mais a espreção do operador unitário colocando no echo:
                
                echo "</br>Situação: Você foi $cond" . (($media < 6)? "REPROVADO" : "APROVADO");

            */
        ?>
    </div>
</body>
</html>