<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
    <?php
    $writing_score = 75;
    $practical_score = 85;

    if ($writing_score >= 70 && $practical_score >= 80) {
        $pass = "합격";
    } else {
        $pass = "불합격";
    }

    echo "필기시험 점수 : {$writing_score}점<br>";
    echo "실습시험 점수 : {$practical_score}점<br>";
    echo "합격 여부 : $pass";
    ?>
    </body>
</html>