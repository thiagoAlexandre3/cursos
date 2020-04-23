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
        //Aqui deixa em maiuscula todas as primeiras letras da palavra
            $nome = "Gustavo Guanabara";
            $fun = ucwords($nome);
            echo $fun;
        ?>
    </div>
</body>
</html>