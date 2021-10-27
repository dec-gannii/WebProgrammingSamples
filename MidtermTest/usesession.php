<!DOCTYPE html>

<?php
        session_start();

        $_SESSION['userid'] = "gannii";
        $_SESSION['username'] = "김가은";

        $userid = $_SESSION['userid'];
        $username = $_SESSION['username'];
        ?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div>등록된 세션 아이디 : <?= $userid?></div>
        <div>등록된 세션 이름 : <?= $username?></div>
    </body>
</html>