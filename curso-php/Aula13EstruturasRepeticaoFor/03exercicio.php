<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilos.css">
    <title>Curso de PHP - Gustavo Guanabara</title>
    <style>
      span{
          color: darkred;
          font-weight: bold;
      }
  </style>
</head>
<body>
    <div>
        <?php
            $c=1;
            $div=0;
            $n=isset($_GET["num"])?$_GET["num"]:0;

            echo "<h2>Analisando o número <span>$n</span></h2></br>";
            echo "O número $n é múltiplo de: ";
            for ($c=1;$c<=$n;$c++){
                $mod=$n%$c;
                if ($mod==0 && $c>=1){
                    echo "<span>$c</span> ";
                    $div++;
                }
            }
            echo "</br>O número $n possui <span>$div</span> divisores.";
            if($div==2){
                echo "</br>$n <span>É NÚMERO PRIMO</span>.";
            }
            else{
                echo "</br>$n <span>NÃO É NÚMERO PRIMO</span>.";
            }
        ?>
        </br></br>
        <a href="03-primos.html">VOLTAR</a>
    </div>
</body>
</html>