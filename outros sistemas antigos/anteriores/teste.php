<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Projeto PHP </title>
</head>
<body>

    <?php
        //variáveis
        $nome = 'Vardo';
        $idade = 79;
        $peso = 70.50;
        $ativo = true;

         //para exibir na tela
         echo 'O meu nome é '.$nome.' e tenho '.$idade.' anos <br>' ;
         echo "O meu nome é $nome e tenho $idade anos";
 
         //verificar se é maior de idade se está entre 18 e 74 anos
         if($idade >= 18 && $idade <=74){
             echo "<br> $nome é maior de idade! ";
         }else if($idade < 18){
             echo "<br> $nome é menor de idade";
         }else{
            echo "<br> $nome está na melhor idade";
         }

         //laço de repetição
         echo '<table border="1">';
         for($contador=0; $contador < 10; $contador++){
            echo "
            <tr> 
                <td> contador </td>
                <td> $contador </td>
             </tr>
            ";
         }
         echo '</table>';

         //aprendendo a montar uma lista
         //           0         1          2         3        4         5
         $lista = ['Gilmar', 'Jhonas', 'Macabeu','Arlindo','Amadeu','Norberto'];
         echo '<br>';
         echo $lista[1];

         for($contador=0; $contador< count($lista); $contador++){
            echo '<hr>';
            echo $lista[$contador];
         }

         
         $conta = 0;
         while($conta < 4){
            echo '<br>';
            echo $conta;
            $conta++;
         }




       
        ?>
       
        
    

</body>
</html>