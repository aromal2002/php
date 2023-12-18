<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <input type="number" name="num">
        <input type="submit" name="sub">
    </form>
</body>
</html>
<?php
 if(isset($_POST['sub'])){
    $n=$_POST['num'];
    $a=strval($n);
    $arr=strrev($a);
    echo 'reversed :'.$arr;
    $s=str_split($a);
    $n=count($s);
    for($i=0;$i<$n;$i++){
        switch ($s[$i]) {
            case '1':
                echo 'one ';break;
            case '2':
                echo 'two ';break;
            case '3':
                echo 'three ';break;
            case '4':
                echo 'four ';break;
            default:
                echo 'not a number';break;
        }
    }
 }
?>

