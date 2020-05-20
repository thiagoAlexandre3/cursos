<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>Integrando HTML5 = PHP</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["raiz"];
            $r = sqrt($n1);
            echo "O valor informado foi $n1. Sua raiz quadrada é: " . number_format($r, 2);
        ?>
        <a href="ModeloHTML.html">voltar<a/>
    </div>
</body>
</html>
