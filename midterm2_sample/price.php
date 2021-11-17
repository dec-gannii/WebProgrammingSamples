<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>
            선택 결과
        </h3>
    <?php
        $time = $_POST["screentime"];
        $adult = $_POST["adult"];
        $kids = $_POST["kids"];

        function select_time($time){
            if ($time == "morning") {
                $selectedtime = "모닝";
            } else  if ($time == "brunch") {
                $selectedtime = "브런치";
            } else if ($time == "day") {
                $selectedtime = "데이";
            } else if ($time == "prime") {
                $selectedtime = "프라임";
            } else if ($time == "moonlight") {
                $selectedtime = "문라이트";
            } else if ($time == "night") {
                $selectedtime = "나이트";
            } 
            return $selectedtime;
        }

        function calc_adult_fee($time, $adult) {
           if ($time == "morning") {
            $adult_fee = 8000;
           } else if ($time == "brunch") {
            $adult_fee = 10000;
           } else if ($time == "day") {
            $adult_fee = 10000;
           } else if ($time == "prime") {
            $adult_fee = 12000;
           } else if ($time == "moonlight") {
            $adult_fee = 12000;
           } else if ($time == "night") {
            $adult_fee = 10000;
           }

            if ($adult == 0) {
                $adult_fee = 0 * $adult_fee;
            } else if ($adult == 1) {
                $adult_fee = 1 * $adult_fee;
            }else if ($adult == 2) {
                $adult_fee = 2 * $adult_fee;
            }else if ($adult == 3) {
                $adult_fee = 3 * $adult_fee;
            }else if ($adult == 4) {
                $adult_fee = 4 * $adult_fee;
            }
            
            return $adult_fee;
        }

        function calc_kids_fee ($time, $kids) {
           if ($time == "morning") {
            $kids_fee = 7000;
           } else if ($time == "brunch") {
            $kids_fee = 8000;
           } else if ($time == "day") {
            $kids_fee = 8000;
           } else if ($time == "prime") {
            $kids_fee = 9000;
           } else if ($time == "moonlight") {
            $kids_fee = 9000;
           } else if ($time == "night") {
            $kids_fee = 8000;
           }

           if ($kids == 0) {
               $kids_fee = 0 * $kids_fee;
           } else if ($kids == 1) {
               $kids_fee = 1 * $kids_fee;
           }else if ($kids == 2) {
               $kids_fee = 2 * $kids_fee;
           }else if ($kids == 3) {
               $kids_fee = 3 * $kids_fee;
           }else if ($kids == 4) {
               $kids_fee = 4 * $kids_fee;
           }
           return $kids_fee;
        }

        $result_fee = calc_adult_fee($time, $adult) + calc_kids_fee($time, $kids);
        
        echo "선택하신 시간대는 <b><i>".select_time($time)."</i></b> 이고, 총 금액은 ".$result_fee."원입니다.";
    ?>
    </body>
</html>