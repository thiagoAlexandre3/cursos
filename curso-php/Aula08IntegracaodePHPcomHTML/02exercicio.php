<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilo.css"/>
    <title>Integrando HTML5 = PHP</title>
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não, informado]";
            $nas = isset($_GET["nasc"])?$_GET["nasc"]:"[Não, informado]";
            $sex = isset($_GET["sexo"])?$_GET["nasc"]:"[Não, informado]";
            $idade = date("Y") - $nas;
            echo "Olá, $nome, você nasceu em $nas, logo tem $idade, alem de ser $sex";
        ?>
        <a href="lerValores.html">voltar<a/>
    </div>
</body>
</html>
