<?php
include 'connect.php';
$id = $_REQUEST['rollno'];
$pass = $_REQUEST['newpass'];
$sql = "UPDATE student_login SET `password` = '".$pass."' WHERE roll_number = '".$id."'";
$result = $conn->query($sql);
?>