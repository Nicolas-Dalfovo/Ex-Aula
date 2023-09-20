<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $valortotal = 22500.00;
    $valorfinaciado = 489.65 * 60;
    $valorfinal = $valorfinaciado - $valortotal;

    echo 'Maria irá gastar R$', $valorfinal, ' a mais do que o valor a vista';
    
    
    ?>
</body>
</html>