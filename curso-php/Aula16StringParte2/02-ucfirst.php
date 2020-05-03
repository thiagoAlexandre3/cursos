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
        // deixa a primeira letra em maiuscula, tambem podemos utilizar mais de uma função em um so comando
            $nome = "meu nome é Gustavo Guanabara";
            $fun = ucfirst($nome);
            echo $fun;
        ?>
    </div>
</body>
</html>