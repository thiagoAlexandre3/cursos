<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP - Gustavo Guanabara</title>
    </style>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            soma($n2, $n1);
            function soma($a, $b){
                $s = $a = $b;
                echo "A soma vale: $b";
            }
        ?>

    </div>
</body>
</html>