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
        <pre>
            <?php
                $v = array (3 =>5,
                            1 => 6,
                            8 => 8,
                            4 => 7,);
                $v[0] = "E";
            // temos aqui tambem o comando unset, que desaloca uma posição do vetor
                print_r($v);
            ?> 
        </pre> 
    </div>
</body>
</html>