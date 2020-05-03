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
        // deixa as letras em minusculas, tambem temos a função strtoupper, que deixa as letras em maisculas
            $nome = "Gustavo Guanabara";
            $nome2 = strtolower($nome);
            echo "seu nome é $nome2";
        ?>
    </div>
</body>
</html>