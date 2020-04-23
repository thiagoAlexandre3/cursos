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
            //essa função separa ou caracteres em vetores separados
            $vetor = "Maria";
            $funsplit = str_split($vetor);
            print_r($funsplit);
        ?>
    </div>
</body>
</html>