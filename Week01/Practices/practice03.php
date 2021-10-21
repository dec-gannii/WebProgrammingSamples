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
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
                /*
                
                $filename = "cat.jpg";
                echo "<img src = '$filename'>";
                echo "<br>";
                
                $filename = "rabbit.jpg";
                echo "<img src = '$filename'>";

                $name = "김가은";
                echo $name;
                echo "님 반갑습니다!";
                echo "<br>";
                
                $name = "gannii";
                echo "{$name}님 반갑습니다!";
                
                $id = "gannii";
                $name = '김가은';

                */
                $title = "<h2>Contacts</h2>";
                $name = "***";
                $address = "*************";
                $mobile = "###-####-####";
                $email = "#####@###.###";

                echo "이름 : {$name} <br>";
                echo "휴대폰 번호 : {$mobile}<br>";
                echo "주소 : {$address}<br>";
                echo "이메일 : {$email}";
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