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
    <script>
        function check_input() {

            if (!document.member_form.pass.value) {
                alert("비밀번호를 입력하세요!");
                document
                    .member_form
                    .pass
                    .focus();
                return;
            }

            if (!document.member_form.pass_confirm.value) {
                alert("비밀번호확인을 입력하세요!");
                document
                    .member_form
                    .pass_confirm
                    .focus();
                return;
            }

            if (!document.member_form.name.value) {
                alert("이름을 입력하세요!");
                document
                    .member_form
                    .name
                    .focus();
                return;
            }

            if (!document.member_form.email1.value) {
                alert("이메일 주소를 입력하세요!");
                document
                    .member_form
                    .email1
                    .focus();
                return;
            }

            if (!document.member_form.email2.value) {
                alert("이메일 주소를 입력하세요!");
                document
                    .member_form
                    .email2
                    .focus();
                return;
            }

            if (document.member_form.pass.value != document.member_form.pass_confirm.value) {
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                document
                    .member_form
                    .pass
                    .focus();
                document
                    .member_form
                    .pass
                    .select();
                return;
            }

            document
                .member_form
                .submit();
        }

        function reset_form() {
            document.member_form.pass.value = "";
            document.member_form.pass_confirm.value = "";
            document.member_form.name.value = "";
            document.member_form.email1.value = "";
            document.member_form.email2.value = "";
            document
                .member_form
                .id
                .focus();
            return;
        }
    </script>
    <body>
    <?php    
		session_start();
		if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
		else $userid = "";
		if (isset($_SESSION["username"])) $username = $_SESSION["username"];
		else $username = "";

   	$con = mysqli_connect("localhost", "gannii", "gannii1220!!", "midterm");
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["password"];
    $name = $row["name"];
	$info = $row["info"];
	$info = str_replace(" ", "&nbsp;", $info);
    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
?>
        <form
            name="member_form"
            method="post"
            action="member_modify.php?id=<?=$userid?>">
            <h2>회원 정보수정</h2>
            <div class="form id">
                <div class="col1">아이디</div>
                <div class="col2">
                    <?=$userid?>
                </div>
            </div>
            <div class="clear"></div>

            <div class="form">
                <div class="col1">비밀번호</div>
                <div class="col2">
                    <input type="password" name="pass" value="<?=$pass?>">
                </div>
            </div>
            <div class="clear"></div>
            <div class="form">
                <div class="col1">비밀번호 확인</div>
                <div class="col2">
                    <input type="password" name="pass_confirm" value="<?=$pass?>">
                </div>
            </div>
            <div class="clear"></div>
            <div class="form">
                <div class="col1">이름</div>
                <div class="col2">
                    <input type="text" name="name" value="<?=$name?>">
                </div>
            </div>
            <div class="clear"></div>
            <div class="form email">
                <div class="col1">이메일</div>
                <div class="col2">
                    <input type="text" name="email1" value="<?=$email1?>">@<input type="text" name="email2" value="<?=$email2?>">
                </div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
            <div class="form info">
                <div class="col1">한줄소개</div>
                <div class="col2">
                    <textarea name="info"><?=$info?></textarea>
                </div>
            </div>
            <div class="clear"></div>
            <div class="bottom_line"></div>
            <div class="buttons"><br>
                <button>
                    <a href="#" onclick="check_input()">저장하기</a>
                </button>
                <button>
                    <a href="#" onclick="reset_form()">리셋하기</a>
                </button>
            </div>
        </form>

    </body>
</html>