<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <style>
            table {
                border: 1px solid #4C4C4C;
                border-collapse: collapse;
            }
            td,
            th {
                border: 1px solid #4C4C4C;
                padding: 5px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <?php
                $title = "<h2>Contacts</h2>";
                $name = "***";
                $address = "*************";
                $mobile = "###-####-####";
                $email = "#####@###.###";
            ?>
        <table>
            <tr>
                <th>이름</th>
                <th>휴대폰번호</th>
                <th>주소</th>
                <th>이메일</th>
            </tr>
            <tr>
                <td><?=$name?></td>
                <td><?=$mobile?></td>
                <td><?=$address?></td>
                <td><?=$email?></td>
            </tr>
        </table>
    </body>
</html>