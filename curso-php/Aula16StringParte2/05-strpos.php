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
        <?php,
        //pega a posição em que a string esta, tambem temos a função stripos, que ignora a caixa de texto, ou seja, se você quer encontrar um nome, e digitar sem a maiuscula, vai funcionar mesmo assim
            $frase = "Estou aprendendo PHP";
            $fun = strpos($frase, "PHP");
            echo "A string pos foi encontrada na posição $fun";
        ?>
    </div>
</body>
</html>