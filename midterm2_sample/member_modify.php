<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            a {
                text-decoration: none;
                color: black;
            }
        </style>
    </head>
    <body>
        <?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];
    $info = $_POST["info"];

    $email = $email1."@".$email2;
          
    $con = mysqli_connect("localhost", "gannii", "gannii1220!!", "midterm");
    $sql = "update members set password='$pass', name='$name' , email='$email', info='$info'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "반갑습니다! ".$name."(id : ".$id.")님";
?>
        <br><br>
        <button>
            <a href='logout.php'>로그아웃 후 회원가입으로 이동</a>
        </button>
    </body>
</html>