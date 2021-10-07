<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            $first_num = $_POST["first"];
            $second_num =$_POST["second"];

            $sum = 0;

            for ($i = $first_num; $i <= $second_num; $i++) {
                $sum += $i;
            }
                
        ?>
        <p> 첫번째 숫자부터 두 번째 숫자까지의 합 : <?=$sum?> </p>
    </body>
</html>