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
                $aluno = array ("nome" => "Thiago",
                                "idade" => 15,
                                "peso" => 38.5);
                $aluno["fuma"] = true;
                foreach($aluno as $campo => $valor){
                    echo "</br>O valor de $campo é $valor </br>";
                }
            ?>
        </pre>
    </div>
</body>
</html>