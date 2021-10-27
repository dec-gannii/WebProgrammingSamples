<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        
        $a = setcookie("userid", "gannii");
        $b = setcookie("username", "김가은", time()+60);
        
           if (isset($_COOKIE["userid"]) && isset($_COOKIE["username"]))
           {
               $userid = $_COOKIE["userid"];
               $username = $_COOKIE["username"];

               echo "userid cookie : $userid"."<br>";
               echo "username cookie : $username";
           } else {
               echo "NO cookie exists";
           }
        ?>
    </body>
</html>