<html>

    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
    $id = $_POST["id"];
    $pw = $_POST["password"];
    
    session_start();

    $_SESSION['userid'] = $id;
    $_SESSION['userpw'] = $pw;

    if (isset($_SESSION['userid']) && isset($_SESSION['userpw'])) {
            echo $_SESSION['userid']."님 반갑습니다!"; 
    }
?>
    </body>
</html>