<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <input type="text" name="str">
        <input type="submit" name="sub">
    </form>
</body>
</html>
<?php
if(isset($_POST['sub'])){
    $s=$_POST['str'];
    $arr=str_split($s);
    $n=strlen($s);
    for($i=0;$i<$n;$i++) {
        if($arr[$i]=='a'){
            $arr[$i]=strtoupper($arr[$i]);
        }
    }
    $a=implode("",$arr);
    echo $a;
}
?>