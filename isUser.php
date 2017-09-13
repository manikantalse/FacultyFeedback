<?php
include 'connect.php';
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $sql = "SELECT password FROM `student_login` WHERE roll_number='".$username."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row["password"]==$password){
                echo "true";
            }else{
                echo "false";
            }
        }
    }
?>    