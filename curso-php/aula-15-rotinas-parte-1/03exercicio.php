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
            $res = soma(5,6,1,2,3,4,8,9);
            echo "A soma dos valores é $res";
            function soma(){
                $v = func_get_args();
                $tot = func_num_args();
                $s = 0;
                for($c=0;$c<$tot;$c++){
                    $s += $v[$c];
                }
                return $s;
            }
        ?>
    </div>
</body>
</html>