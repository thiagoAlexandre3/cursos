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
        //mostra uma quantidade de caracter que você mandar nos parametros
            $frase = "Curso em video";
            $fun = substr($frase, 0, 5);
            echo $fun;
        ?>
    </div>
</body>
</html>