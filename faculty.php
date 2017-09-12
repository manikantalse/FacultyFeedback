<?php
    include 'connect.php';
        $sql = "SELECT faculty FROM `subjects` WHERE id=".$id;
        $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["faculty"];
        }
    } else {
        echo "Faculty";
    }
    ?>