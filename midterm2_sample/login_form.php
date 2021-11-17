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
        <script>
            function check_input() {
                if (!document.login_form.id.value) {
                    alert("아이디를 입력하세요");
                    document
                        .login_form
                        .id
                        .focus();
                    return;
                }

                if (!document.login_form.pass.value) {
                    alert("비밀번호를 입력하세요");
                    document
                        .login_form
                        .pass
                        .focus();
                    return;
                }
                document
                    .login_form
                    .submit();
            }
        </script>
    </head>
    <body>
        <div id="main_content">
            <div id="login_box">
                <div id="login_title">
                    <span>로그인</span>
                </div>
                <br>
                <div id="login_form">
                    <form name="login_form" method="post" action="login.php">
                        <label>ID : </label><input type="text" name="id" placeholder="아이디">
                        <br>
                        <label>PW : </label><input type="password" id="pass" name="pass" placeholder="비밀번호">
                        <!-- pass -->
                </ul>
                <div id="login_btn">
                    <br>
                    <button>
                        <a href="#" onclick="check_input()">로그인</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>