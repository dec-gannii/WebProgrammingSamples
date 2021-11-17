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
                if (!document.sign_in.id.value) {
                    alert("아이디를 입력하세요!");
                    document
                        .sign_in
                        .id
                        .focus();
                    return;
                }

                if (!document.sign_in.pass.value) {
                    alert("비밀번호를 입력하세요!");
                    document
                        .sign_in
                        .pass
                        .focus();
                    return;
                }

                if (!document.sign_in.pass_confirm.value) {
                    alert("비밀번호확인을 입력하세요!");
                    document
                        .sign_in
                        .pass_confirm
                        .focus();
                    return;
                }

                if (!document.sign_in.name.value) {
                    alert("이름을 입력하세요!");
                    document
                        .sign_in
                        .name
                        .focus();
                    return;
                }

                if (!document.sign_in.email1.value) {
                    alert("이메일 주소를 입력하세요!");
                    document
                        .sign_in
                        .email1
                        .focus();
                    return;
                }

                if (!document.sign_in.email2.value) {
                    alert("이메일 주소를 입력하세요!");
                    document
                        .sign_in
                        .email2
                        .focus();
                    return;
                }

                if (document.sign_in.pass.value != document.sign_in.pass_confirm.value) {
                    alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                    document
                        .sign_in
                        .pass
                        .focus();
                    document
                        .sign_in
                        .pass
                        .select();
                    return;
                }

                document
                    .sign_in
                    .submit();
            }

            function reset_form() {
                document.sign_in.id.value = "";
                document.sign_in.pass.value = "";
                document.sign_in.pass_confirm.value = "";
                document.sign_in.name.value = "";
                document.sign_in.email1.value = "";
                document.sign_in.email2.value = "";
                document
                    .sign_in
                    .id
                    .focus();
                return;
            }

            function check_id() {
                window.open(
                    "member_check_id.php?id=" + document.sign_in.id.value,
                    "IDcheck",
                    "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes"
                );
            }
        </script>
    </head>
    <body>
        <div id="main_content">
            <div id="join_box">
                <form name="sign_in" method="post" action="member_insert.php">
                    <h2>회원 가입</h2>
                    <div class="form id">
                        <div class="col1">아이디</div>
                        <div class="col2">
                            <input type="text" name="id">
                            <button>
                                <a href="#" onclick="check_id()">중복확인</a>
                            </button>
                        </div>
                    </div>
                    <div class="clear"></div>

                    <div class="form">
                        <div class="col1">비밀번호</div>
                        <div class="col2">
                            <input type="password" name="pass">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form">
                        <div class="col1">비밀번호 확인</div>
                        <div class="col2">
                            <input type="password" name="pass_confirm">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form">
                        <div class="col1">이름</div>
                        <div class="col2">
                            <input type="text" name="name">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form email">
                        <div class="col1">이메일</div>
                        <div class="col2">
                            <input type="text" name="email1">@<input type="text" name="email2">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form info">
                        <div class="col1">한줄소개</div>
                        <div class="col2">
                            <textarea name="info"></textarea>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="bottom_line"></div>
                    <div class="buttons">
                        <button>
                            <a href="#" onclick="check_input()">저장하기</a>
                        </button>
                        <button>
                            <a href="#" onclick="reset_form()">리셋하기</a>
                        </button><br><br>
                        <button>
                            <a href='login_form.php'>로그인하기</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>