<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $email1 = $_POST["email"];
        $email2 = $_POST["email2"];

        echo $email1."@".$email2;
        ?>
    </body>
</html>