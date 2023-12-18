<?php
include('connection.php');
session_start();
if(isset($_POST["insert"])){
    $id=$_POST['id'];
    $na=$_POST['na'];
    $mark=$_POST['mark'];
    $dept=$_POST['dept'];
    $_SESSION['stdid'];
    $s="insert into student values ('$id','$na',$mark,'$dept');";
    $r=$conn->query($s);
    if($r===true){
        echo 'one row inserted successfully';
    }
    else{
        echo'erorr';
    }
}
?>