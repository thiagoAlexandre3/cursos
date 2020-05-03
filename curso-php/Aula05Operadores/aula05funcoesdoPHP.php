<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        h2{
            font: 15pt Arial;
            color: blue;

        }

    </style>
    <title>Funções Aritmétricas</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Os valores informados foram: $n1 e $n2</h2>";
            $absoluto = abs($n1);
            $potencia = pow($n1, $n2);
            $raiz = sqrt($n2);
            $arredondar = round($n2);
            $inteiros = intval($n2);
            $formatnum = number_format($n2, 2, ",", ".");
            echo "O valor absoluto de n1 é $absoluto</br>";
            echo "O valor de $n1 <sup> $n2 </sup> é $potencia</br>";
            echo "A raiz de $n2 é $raiz </br>";
            echo "O valor arredondado de $n2 é $arredondar</br>";
            echo "O valor inteiro de $n2 é $inteiros</br>";
            echo "O valor de $n2 em reais é R$$formatnum";
        ?>
    </div>
</body>
</html>