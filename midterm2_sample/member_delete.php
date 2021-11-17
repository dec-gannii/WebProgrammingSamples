<!DOCTYPE html>
<html>
    <head>
        <style>
            a {
                text-decoration: none;
                color: black;
            }
        </style>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        session_start();
        $id = $_SESSION["userid"];
        $con = mysqli_connect("localhost", "gannii", "gannii1220!!", "midterm");
        $sql = "delete from members where id = '".$id."'";
        
        mysqli_query($con, $sql);

        mysqli_close($con);     
?>
        <h3>지금까지 시스템을 이용해주셔서 감사합니다. :)</h3>
        <button>
            <a href='login_form.php'>로그인으로 돌아가기</a>
        </button>
        <button>
            <a href='sign_in.php'>회원가입으로 돌아가기</a>
        </button>
    </body>
</html>