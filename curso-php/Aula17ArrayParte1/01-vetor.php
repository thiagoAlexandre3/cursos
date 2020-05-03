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
            //criando vetor da forma mais normal
                $v1[0] = 5; $v1[1] = 8; $v1[2] = 3; $v1[3] = 2; $v1[4] = 0;
            // forma simplificada
                $v2 = array (3,5,8);
            // adição de forma facil
                $v2[] = 7;
                print_r($v1);
                print_r($v2);
            //outra forma de se criar vetores o primeiro indica inicio, o segundo, o fim, e o do meio, de quanto em quanto que ele vai pular
                $v3 = range(5,20,2);
                print_r($v3);
            // podemos tambem fazer um for para mostrar o vetor,
            foreach ($v3 as     $mV){
                echo "</br> $mV ";
            }
            ?>
        </pre>
    </div>
</body>
</html>