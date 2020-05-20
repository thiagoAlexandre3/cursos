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
             // essa função conta o tanto de palavras que a frase possue, podemos subistituir o valor 0 por 1, que cria um vetor com as palavras com as posições sequenciadas, ja o 2, cria um vetor com posições dos caracter conforme o decorrer da frase, e para fazer isso, é preciso substituir o echo por print_r
            $frase = "Eu vou estudar php";
            $cont = str_word_count($frase, 0);
            echo $cont;
        ?>
    </div>
</body>
</html>