<?php
$conn=new mysqli('localhost','root','','trial');
if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
}
else{
    echo 'connection established';
}
?>