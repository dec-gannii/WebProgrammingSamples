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
        <title>PHP 프로그래밍 입문</title>
    </head>
    <body>
    <?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];

   $con = mysqli_connect("localhost", "gannii", "gannii1220!!", "midterm");
   $sql = "select * from members where id='$id'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["password"];

        mysqli_close($con);

        if($pass != $db_pass)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            echo "반갑습니다! ".$_SESSION["username"]."(id : ".$_SESSION["userid"].")님";
        }
     }        
?>
        <br><br>
        <button>
            <a href='logout.php'>로그아웃 후 회원가입으로 이동</a>
        </button>
        <button>
            <a href='member_modify_form.php'>정보 수정하기</a>
        </button>
        <button>
            <a href='member_delete.php'>탈퇴하기</a>
        </button>
    </body>
</html>