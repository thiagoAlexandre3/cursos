<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $n1 = 4;
            $n2 = 6;
            $soma = $n1 + $n2;
            $subitracao = $n1 - $n2;
            $multiplicacao = $n1 * $n2;
            $divisao = $n1 / $n2;
            $resto = $n1 % $n2;
            $media = ($n1 + $n2) / 2;
            echo "A soma entre $n1 + $n2 é igual a $soma</br>";
            echo "A subritação entre $n1 + $n2 é igual a $subitracao</br>";
            echo "A multiplicação entre $n1 + $n2 é igual a $multiplicacao</br>";
            echo "A divisão entre $n1 + $n2 é igual a $divisao</br>";
            echo "O resto da divisão entre $n1 + $n2 é igual a $resto</br>";
            echo "A média entre $n1 + $n2 é igual a $media";
        ?>
    </div>
</body>
</html>