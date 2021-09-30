<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php
            $subject = array("파이썬", "PHP", "자바 스크립트", "사진", "영화 감상");
            $name = array("김**", "이**", "정**", "장**", "황**", "이**", "최**", "함**", "도**", "강**");

            $score = array(array(80, 79, 90, 89, 100, 87, 85, 83, 96, 99),
            array(70, 88, 70, 85, 60, 95, 77, 89, 82, 93),
            array(80, 79, 90, 89, 100, 87, 85, 83, 96, 99),
            array(70, 88, 70, 85, 60, 95, 77, 89, 82, 93),
            array(85, 66, 80, 88, 90, 86, 85, 93, 88, 79),);

            for ($i = 0; $i <= 9; $i++) {
                $sum = 0;
                for ($j = 0; $j <= 4; $j++) {
                    
                    $sum = $sum + $score[$j][$i];
                }

                $avg = $sum/5;
                echo "{$name[$j]}의 합계 : $sum, 평균 : $avg <br>";
            }
            
        ?>
    </body>
</html>