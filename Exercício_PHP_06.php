<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        /* Valor disponível */

        $real = 50;

        /* Valor em Kg */

        $maça = 5;
        $melancia = 10;
        $laranja = 3;
        $repolho = 6;
        $cenoura = 4;
        $batatinha = 2;

        /* Kg comprado */

        $maçakg = 2;
        $melanciakg = 1;
        $laranjakg = 2;
        $repolhokg = 1;
        $cenourakg = 3;
        $batatinhakg = 1;


        /* valor gasto com cada produto */
        $valorm = $maça * $maçakg;
        $valorme = $melancia * $melanciakg;
        $valorl = $laranja * $laranjakg;
        $valorre = $repolho * $repolhokg;
        $valorc = $cenoura * $cenourakg;
        $valorb = $batatinha * $batatinhakg;


        /* Valor Total */

        $valortotal = $valorm + $valorme + $valorl + $valorre + $valorc + $valorb;


        /* Valor Final */
        $valorfinal = ($valortotal - $real) * -1;
    
    


        if( $valortotal > $real){

         echo "<font color = 'red'> Faltou " .$valorfinal * -1 . " reais</font>";

        }elseif($valortotal < 50){

         echo "<font color = 'blue'> Sobrou " .$valorfinal. " reais </font>";

        }elseif($valortotal == $real){

         echo "<font color = 'green'> O saldo de compras foi gasto";
        } 
    ?>
</body>
</html>