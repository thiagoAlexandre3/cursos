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
            $txt = "Aqui temos um texto gigante criado pelo php que vai mostrar o funcionamento da função wordwarp, comando esse, que faz a quebra de linha em determinado texto, tanto visuambente como no codigo-fonte criado";
            $res = wordwrap($txt, 90, "</br>\n", false);
            echo $res;
        ?>
    </div>
</body>
</html>