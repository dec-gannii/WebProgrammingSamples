<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            function child_rate($cat) {
                if ($cat == "입장권")
                    $price = 13000;
                else if ($cat == "자유 이용권 주간")
                    $price = 25000;
                else if ($cat == "자유 이용권 야간")
                    $price = 22000;
                else 
                    $price = 22000;

                return $price;
            }

            function youth_rate($cat) {
                if ($cat == "입장권")
                    $price = 15000;
                else if ($cat == "자유 이용권 주간")
                    $price = 28000;
                else if ($cat == "자유 이용권 야간")
                    $price = 25000;
                else 
                    $price = 25000;

                return $price;  
            }
            
            function adult_rate($cat) {
                if ($cat == "입장권")
                    $price = 18000;
                else if ($cat == "자유 이용권 주간")
                    $price = 32000;
                else if ($cat == "자유 이용권 야간")
                    $price = 29000;
                else 
                    $price = 29000;

                return $price;  
            }

            $age = 2;
            $category = "자유 이용권 야간";

            if ($age >= 0 && $age <= 3)
                $fee = 0;
            else if ($age >= 4 && $age <= 10)
                $fee = child_rate($category);
            else if ($age >= 11 && $age <= 17)
                $fee = child_rate($category);
            else
                $fee = child_rate($category);

            echo "입장권 종류 : $category <br>";
            echo "입장객 나이 : {$age}세 <br>";
            echo "입장료 : {$fee}원";
        ?>
    </body>
</html>