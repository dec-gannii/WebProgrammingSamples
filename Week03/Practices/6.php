<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            $count = 0;

            for ($num = 5; $num <= 500; $num++) {
                if ($num % 5 == 0) {
                    echo "$num ";
                }
                
                $count++;

                if ($count % 50 == 0) {
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>