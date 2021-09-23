<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            echo "--------------------------<br>";
            echo "제곱미터 평<br>";
            echo "--------------------------<br>";

            for ($m2 = 10; $m2 <= 200; $m2 = $m2 + 10) {
                $pyung = $m2 * 0.3025;
                echo "$m2 $pyung <br>";
            }
            
            echo "--------------------------<br>";
        ?>
    </body>
</html>