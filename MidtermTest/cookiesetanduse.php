<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        $userid = $_POST["userid"];
        $userpw = $_POST["userpw"];
        $username = $_POST["username"];
        $userage = $_POST["userage"];
        $email1 = $_POST["email1"];
        $email2 = $_POST["email2"];
        
        $email = $email1."@".$email2;

        $idcookie = setcookie("userid", $userid, time()+60);
        $pwcookie = setcookie("userpw", $userpw, time()+60);
        $namecookie = setcookie("username", $username, time()+60);
        $agecookie = setcookie("userage", $userage, time()+60);
        $emailcookie = setcookie("useremail", $email , time()+60);
        
           if (isset($_COOKIE["userid"]) && isset($_COOKIE["username"]) && isset($_COOKIE["userpw"])
           && isset($_COOKIE["userage"]) && isset($_COOKIE["useremail"]))
           {
               $userid = $_COOKIE["userid"];
               $userpw = $_COOKIE["userpw"];
               $username = $_COOKIE["username"];
               $userage = $_COOKIE["userage"];
               $email = $_COOKIE["useremail"];

               echo "userid cookie : $userid"."<br>";
               echo "userpw cookie : $userpw"."<br>";
               echo "username cookie : $username"."<br>";
               echo "userage cookie : $userage"."<br>";
               echo "useremail cookie : $email"."<br>";
           } else {
               echo "NO cookie exists";
           }
        ?>
    </body>
</html>