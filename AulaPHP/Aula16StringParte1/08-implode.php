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
            // essa função junta os valores do vetor, podemos utilizar tambem a função join, que faz basicamente a mesma coisa
            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "Video";
            $texto = implode(" ", $vetor); 
            print_r($texto);
        ?>
    </div>
</body>
</html>