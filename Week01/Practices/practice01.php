<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
                $money = 3000; // 지불액
                $price = 800; // 물건 가격
                $num = 3; // 구매 개수

                $change = $money - $price * $num;

                echo ("물건 가격 : $price <br>");
                echo ("구매 개수 : $num <br>");
                echo ("지불액 : $money <br>");
                echo ("거스름돈은 {$change}원 입니다.");
                ?>

        <?php
                $a = 3; 
                $b = 2; 
                
                $a = $a + $b;
                $b = $a + 5;
                $c = $a * $b;

                $c = $c % 2;
                $a = $b + $c;
                $b = $a * $b;

                echo "a : $a, b : $b, c : $c";
                ?>
    </body>
</html>