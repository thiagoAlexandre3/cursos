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
            //essa função mostra o numero de caracteres que o texto possue podemos usar tambem a função trim, que tira os espaços do inicio e do final, alem de ltrim e rtrim, left e rigth, para usar deve-se criar uma variavel: $nome = trim($TXT)
            $txt = "   Curso de php, com Curso em Video   ";
            echo(strlen($txt)); 
        ?>
    </div>
</body>
</html>