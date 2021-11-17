<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form name="form" method="post" action="price.php">
            <label>상영 시간 : </label>
            <select name="screentime">
                <option value="" selected="selected">선택하세요</option>
                <option value="morning">모닝</option>
                <option value="brunch">브런치</option>
                <option value="day">데이</option>
                <option value="prime">프라임</option>
                <option value="moonlight">문라이트</option>
                <option value="night">나이트</option>
            </select>
            <br><br>
            <label>성인 : </label>
            <input type="number" name="adult">
            <br><br>
            <label>청소년 : </label>
            <input type="number" name="kids">
            <br><br>
            <input type="submit" value="가격 알아보기">
        </form>
    </body>
</html>