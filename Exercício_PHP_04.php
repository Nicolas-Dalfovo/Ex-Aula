<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $base = 2;
        $altura = 8;

        $area = $base * $altura;
        if($area > 10){


            echo "<h1>a área de um retângulo de lados $base e $altura metros é $area metros quadrados</h1>";

        }else{
            echo "<h3>a área de um retângulo de lados $base e $altura metros é $area metros quadrados</h3>";

        }
    
    
    ?>
</body>
</html>