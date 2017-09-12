<?php
    include 'connect.php';
        $sql = "SELECT subject FROM `2-1-cse-subjects` WHERE id=".$id;
        $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["subject"];
        }
    } else {
        echo "Subject";
    }
    ?>