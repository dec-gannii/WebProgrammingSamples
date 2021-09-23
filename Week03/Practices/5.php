<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            $factorial = 1;
            for ($num = 1; $num <= 10; $num++) {
                $factorial = $num * $factorial;
            echo "{$num}! = $factorial<br>";
        }
    ?>
    </body>
</html>