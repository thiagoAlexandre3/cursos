<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilo.css">
    <title>Curso de PHP - Gustavo Guanabara</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $n1 = isset($_GET["n1"])?$_GET["n1"]:"[ERRO verifique os dados e tente novamente]";
            $n2 = isset($_GET["n2"])?$_GET["n2"]:"[ERRO verifique os dados e tente novamente]";
            $media = ($n1 + $n2) / 2;
            echo "A média entre $n1 e $n2 é igual a $media";
            if($media < 5){
                $status = "Reprovado";
            }
            else if ($media >= 5 && $media < 7){
                $status = "Recuperação";
            }
            else{
                $status = "Aprovado";
            }
            echo "</br>Situação do aluno: <span>$status</span>";
        ?>
    </div>
</body>
</html>