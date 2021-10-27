<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
           $a = setcookie("userid", "gannii");
           $b = setcookie("username", "김가은", time()+60);

           if ($a and $b)
           {
               echo "cookie : 'userid' and 'username' 생성 완료";
               echo "cookie 'username'은 60초 간 지속됨!";
           }
        ?>
    </body>
</html>

