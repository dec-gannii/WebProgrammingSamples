<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        session_start();

        $_SESSION['userid'] = $_POST["userid"];
        $_SESSION['userpw'] = $_POST["userpw"];
        $_SESSION['username'] = $_POST["username"];
        $_SESSION['userage'] = $_POST["userage"];
        $email1 = $_POST["email1"];
        $email2 = $_POST["email2"];
        
        $_SESSION['email'] = $email1."@".$email2;
        
           if (isset($_SESSION['userid']) && isset($_SESSION['userpw']) && isset($_SESSION['username'])
           && isset($_SESSION['userage']) && isset($_SESSION['email']))
           {
               echo "userid session : ".$_SESSION['userid']."<br>";
               echo "userpw session : ".$_SESSION['userpw']."<br>";
               echo "username session : ".$_SESSION['username']."<br>";
               echo "userage session : ".$_SESSION['userage']."<br>";
               echo "useremail session : ".$_SESSION['email']."<br>";
           } else {
               echo "NO cookie exists";
           }
        ?>
    </body>
</html>