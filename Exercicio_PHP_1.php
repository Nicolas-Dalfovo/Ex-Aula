<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $var1 = 9;
            $var2 = 8;
            $var3 = 7;

            $soma = $var1 + $var2 + $var3;

            if($var1 > 10){
                $cor = 'blue';

            }elseif($var2 < $var3){

                $cor = 'green';

            }elseif($var3 < $var1 and $var2){
                $cor ='red';

            }else{

                $cor = 'black';
            }
        
            echo "<p style ='color:$cor;'>$soma</p>";
        
        ?>
</body>
</html>