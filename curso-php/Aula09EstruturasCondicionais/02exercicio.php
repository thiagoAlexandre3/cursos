<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../_css/estilos.css">
    <title>Voto e habilitação</title>
</head>
<body>
    <div>
        <?php
            $nas = isset($_GET["nascimento"])?$_GET["nascimento"]:"[ERRO] verifique os dados e tente novamente";
            $idade = date("Y") - $nas;
            echo "<h1>Você nasceu em $nas, portanto tem $idade anos.</h1> ";
            if($idade < 16){
                $status = "nâo pode votar";
            }else {
                if(($idade >= 16 && $idade <18) || ($idade > 64)){
                    $status = "voto opcional";
                }
                else{
                    $status = "Voto obrigatório";
                }
            }
            echo "</br>Com essa idade você seu status é, $status.";
        ?>

    </div>
</body>
</html>