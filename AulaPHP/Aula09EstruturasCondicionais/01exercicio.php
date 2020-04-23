<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilos.css">
    <title>Voto e habilitação</title>
</head>
<body>
    <div>
        <?php
            $nas = isset($_GET["nascimento"])?$_GET["nascimento"]:"[ERRO] verifique os dados e tente novamente";
            $idade = date("Y") - $nas;
            echo "<h1>Você nasceu em $nas, portanto tem $idade</h1>";
            if($idade >= 18){
                $votar = "ja pode votar";
                $dirigir = "ja pode dirigir";
            }else {
                $votar = "não pode votar";
                $dirigir = "não pode dirigir";
            }
            echo "</br>Com essa idade você, $votar e tambem, $dirigir";
        ?>

    </div>
</body>
</html>