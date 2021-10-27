<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
           $table1 = "free";
           $table2 = "QnA";
        ?>
        <h3> 자유 게시판 </h3>
        <a href = "getmethod2.php?table=<?=$table1?>&type=list">목록보기</a>
        <br>
        <a href = "getmethod2.php?table=<?=$table1?>&type=write">글쓰기</a>
        <br>

        <h3> 질의응답 게시판 </h3>
        <a href = "getmethod2.php?table=<?=$table2?>&type=list">목록보기</a>
        <br>
        <a href = "getmethod2.php?table=<?=$table2?>&type=write">글쓰기</a>
        <br>
        </body>
</html>

