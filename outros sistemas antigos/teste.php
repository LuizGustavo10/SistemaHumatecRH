<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Introdução </title>
</head>
<body>
    
    <?php
        $nome = 'Jhonas';

        if($nome == 'Jhonas'){
            echo 'é o jhonas! ';
        }else{
            echo 'é o impostor!';
        }
        
        echo "Olá mundo! Bem-vindo(a) $nome";

        $idade = 17;

        if($idade >= 18){
            echo '<br> Pode votar!';
        }else{
            echo '<br> Vá embora!';
        }
        
        for($contador =0; $contador < 10; $contador++){
            echo '<hr>';
            echo $contador;
        }

     ?>

</body>
</html>