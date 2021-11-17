<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $year = $_POST["year"];
            $month = $_POST["month"];
            $day = $_POST["day"];
            $todayyear = $_POST["todayyear"];
            $todaymonth = $_POST["todaymonth"];
            $todayday = $_POST["todayday"];
            
            if ($month < $todaymonth)
                $age = $todayyear - year;
            else if ($month == $todaymonth) {
                if ($day <= $todayday)
                    $age = $todayyear - $year;
                else 
                    $age = $todayyear - $year - 1;
            } else {
                $age = $todayyear - $year - 1;
            }

            echo "오늘 날짜 : $todayyear / $todaymonth / $todayday <br>";
            echo "출생 날짜 : $year / $month / $day <br>";
            echo "만 나이 : $age 세";

        ?>
    </body>
</html>