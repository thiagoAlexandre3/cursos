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
        <?
        //substitui uma palavra por outra, temos tambem podemos usa o i, que ignora as maiusculas
            $frase = "Gosto de aprender Matemática!!!";
            $fun = str_replace("Matemática","PHP",$frase);
            echo $fun;
        ?>
    </div>
</body>
</html>