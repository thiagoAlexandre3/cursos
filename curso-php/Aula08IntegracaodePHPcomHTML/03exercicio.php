<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $t = isset($_GET["t"])?$_GET["t"]:"genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"14pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"preto";
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilo.css"/>
    <title>Editor de texto</title>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$t</span>";
        ?>
        <a href="formulario.html">voltar</a>
    </div>
</body>
</html>
