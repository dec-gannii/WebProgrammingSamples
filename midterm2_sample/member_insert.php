<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];
    $info = $_POST["info"];

    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    $con = mysqli_connect("localhost", "gannii", "gannii1220!!", "midterm");

	$sql = "insert into members(id, password, name, email, regist_day, info) ";
	$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', '$info')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
        <button onclick="location.href='login_form.php'">로그인하기</button>
    </body>
</html>