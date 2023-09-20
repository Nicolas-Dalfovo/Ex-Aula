<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $valorvista = 8654.00;
    $parcelas = [24, 36, 48, 60];
    $juros = 0.015;


    foreach($parcelas as $num_parcelas){

        $jurototal = $valorvista * $juros * $num_parcelas;

        $valortotal = $valorvista + $jurototal;

        $valorparcela = $valortotal / $num_parcelas;

        echo "Para $num_parcelas vezes, o valor será de R$ " . number_format($valorparcela, 2);
        echo '<br>';


        $juros += 0.005;


    }
    
    
    
    
    ?>
</body>
</html>