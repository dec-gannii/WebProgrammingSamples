<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
    <?php
        $count = 0;

        for ($num = 1; $num >= 100 && $num <= 500; $num++) {
            if ($num % 2 == 0) {
                echo "$num ";
                $count++;
            }

            if ($count % 2 == 0) {
                echo "<br>";
            }
        }
    ?>
    </body>
</html>