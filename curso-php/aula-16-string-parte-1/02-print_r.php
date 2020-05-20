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
            $v[0] = 4;
            $v[1] = 8;
            $v[2] = 3;
            print_r($v);
            $v2 = array (3,5,9,7,1,6);
            print_r($v2); // temos tambem a função var_export e a var_dump, que mostram o vetor de uma forma difente a var_export é mais abstrata e a var_dump mais tecnica
            
        ?>
    </div>
</body>
</html>