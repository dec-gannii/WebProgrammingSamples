<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>
            주문 금액
        </h3>
    <?php
        $apple = $_POST["apple"];
        $pear = $_POST["pear"];
        $grape = $_POST["grape"];

        function calculating($apple, $pear, $grape) {
            $apple = 3000 * $apple;
            $pear = 5000 * $pear;
            $grape = 10000 * $grape;

            $result = $apple + $pear + $grape;
            return $result;
        }

        $sum = calculating($apple, $pear, $grape);
        
        echo "총 금액은 ".$sum."원입니다.";
    ?>
    </body>
</html>