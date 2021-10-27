<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        session_start();

        $_SESSION['userid'] = "gannii";
        $_SESSION['username'] = "김가은";
        echo $_SESSION['userid']."<br>";
        echo $_SESSION['username']."<br>";
        ?>
    </body>
</html>