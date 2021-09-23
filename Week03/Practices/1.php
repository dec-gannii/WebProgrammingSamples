<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            $num = 1;

            while ($num <= 1000) {
                if ($num % 2 == 0) {
                    echo "$num ";
                }

                $num++;
            }
        ?>
    </body>
</html>