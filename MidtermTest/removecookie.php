<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

        $idcookie = setcookie("userid", "", time()-3600);
        $pwcookie = setcookie("userpw", "", time()-3600);
        $namecookie = setcookie("username", "", time()-3600);
        $agecookie = setcookie("userage", "", time()-3600);
        $emailcookie = setcookie("useremail", "" , time()-3600);

        echo "name, id, pw, age, email cookies are deleted";
           
        ?>
    </body>
</html>