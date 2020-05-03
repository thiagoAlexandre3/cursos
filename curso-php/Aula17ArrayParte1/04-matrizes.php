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
        <pre>
            <?php
                $m = array (array(6, 4), array (4,9), array (3, 2));
                $m[4][0] = 5;
                $m[4][1] = 10;
                print_r($m);
            ?>
        </pre>
    </div>
</body>
</html>