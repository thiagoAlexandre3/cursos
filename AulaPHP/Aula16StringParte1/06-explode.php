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
            // nesta função ela substitui a função, str_word_conut com posição 1
            $site = "Curso em video";
            $vetor = explode(" ", $site);
            print_r($vetor);
        ?>
    </div>
</body>
</html>