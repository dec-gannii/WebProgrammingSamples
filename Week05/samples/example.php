<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
for($i = 2; $i <= 9; $i++){
    echo "--------------------<br/>";
    for($j = 1; $j <= 9; $j++){
        $gugudan[$i][$j] = $i * $j; 
        echo $i." X ".$j." = ".$gugudan[$i][$j]."<br/>";
    }
}
 
?>
</body>
</html>
