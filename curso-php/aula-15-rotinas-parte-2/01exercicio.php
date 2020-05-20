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
            $a = 7;
            referencia($a);
            echo "<p>O valor de a é igual a $a</p>";
            function referencia(&$x){
                $x += 2; 
                echo "<p>O valor de X é igual a $x</p>";
            }
        ?>
    </div>
</body>
</html>