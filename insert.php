<?php
include 'connect.php';
    /*for($x=10;$x<100;$x++){
        $id = '165u1a05'.$x;
        $sql = "INSERT INTO student_login(roll_number,password) VALUES('".$id."','mypass')";
        $result = $conn->query($sql);
    }*/
    for($x=0;$x<4;$x++){
        $id = '165u1a05B'.$x;
        $sql = "INSERT INTO student_login(roll_number,password) VALUES('".$id."','mypass')";
        $result = $conn->query($sql);
    }
?>