<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            $file_dir = "C:/xampp/htdocs/assignments/images/";
            $file_path = $file_dir.$_FILES["upload"]["name"];
            if (move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path)) {
                $img_path = "images/".$_FILES["upload"]["name"];
        ?>
        
        <img src = "<? = $img_path?>"> <br>
        <? = $_POST["comment"]?>

        <?php
            }
            else {
                echo "파일 업로드 오류가 발생했습니다!!";
            }
        ?>
    </body>
</html>