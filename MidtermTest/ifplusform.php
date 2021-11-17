<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];
            
            if ($num1 > $num2) {
                if ($num1 > $num3) {
                    $max1 = $num1;
                    if ($num2 > $num3) {
                        $max2 = $num2;
                        $max3 = $num3;
                    } else {
                        $max2 = $num3;
                        $max3 = $num2;
                    }
                } else {
                    $max1 = $num3;
                    $max2 = $num1;
                    $max3 = $num2;
                }
            } else {
                if ($num1 > $num3) {
                    $max1 = $num2;
                    $max2 = $num1;
                    $max3 = $num3;
                } else {
                    if ($num2 > $num3) {
                        $max1 = $num2;
                        $max2 = $num3;
                        $max3 = $num1;
                    } else {
                        $max1 = $num3;
                        $max2 = $num2;
                        $max3 = $num1;
                    }
                }
            }

            echo "입력된 세 개의 숫자 : {$num1}, {$num2}, {$num3} <br>";
            echo "큰 수부터 정렬한 결과 : $max1 > $max2 > $max3";
        ?>
    </body>
</html>