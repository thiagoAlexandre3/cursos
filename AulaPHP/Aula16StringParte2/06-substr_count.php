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
            $frase = "Estou aprendendo PHP em curso em video de PHP";
            $fun = substr_count($frase, "PHP");
            echo "O PHP foi encontrado $fun vezes";
        ?>
    </div>
</body>
</html>