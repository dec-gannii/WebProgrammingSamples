<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $gender = $_POST["gender"];
        $email_ok = $_POST["email_ok"];

        if ($email_ok == "수신")
            $email = "수신합니다.";
        else 
            $email = "수신하지 않습니다."
        ?>

        <ul>
            <li>성별 : <?=$gender?> </li>
            <li>이메일 수신 여부 : <?=$email?> </li>
    </body>
</html>