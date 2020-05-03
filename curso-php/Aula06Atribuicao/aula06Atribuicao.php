<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Atribuicoes simplificadas</title>
</head>
<body>
    <div>
        <?php
            /*
                $a = 9;
                $b = 5;
                $c = 5;
                $amaisb += $b;
                $amenosb -= $b;
                $amultiplicadob *= $b;
                $adivisaob /= $b;
                $arestob %= $b;

            */
            $preco = $_GET["p"];
            echo "O preço do produto é RS $preco</br>";
            $preco += $preco * 10 / 100;
            echo "O novo preço com 10% de aumento é R$ " . number_format($preco, 2, ",", ".");
            $preco -= $preco * 10 / 100;
            echo "</br>O novo preço com 10% de desconto é R$ " . number_format($preco, 2, ",", ".");
        ?>
    </div>
</body>
</html>