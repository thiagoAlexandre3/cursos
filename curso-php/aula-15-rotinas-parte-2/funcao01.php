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
            include "funcao.php";
            /*
            Podemos usar tambem o parametro require, include_once e require_ onse
            O require faz praticamente a mesma coisa, a diferença é que ele só executa se o arquivo existir e não tiver problemas
            O include_once e o require_onse, é usado quando você ira usar a mesma função mais de uma vez no código, pois ele carrega uma vez e fica disponivel, diferente dos outros dois, que vai carregar a cada vez que você usar.
            */
            echo "<h1>Testando novas funções</h1>";
            ola();
            $v = 2;
            valorV($v);
            echo "<h2>Finalizando o programa</h2>";            
        ?>
    </div>
</body>
</html>