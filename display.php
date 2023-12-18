<?php
include('connection.php');
if(isset($_POST["disp"])){
    $s="select * from student;";
    $r=$conn->query($s);
    if($r->num_rows>0){
        while($row=$r->fetch_assoc()){
            echo 'Student id :'.$row['stdid'].'<br>';
            echo 'Student name :'.$row['name'].'<br>';
            echo 'Student mark :'.$row['totalmark'].'<br>';
            echo 'Student dept :'.$row['department'].'<br>';
        }
    }
}
?>