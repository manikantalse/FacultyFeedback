<?php
include 'connect.php';
$ratingType = ['teaching', 'class_maintenance', 'doubt_clarification', 'english_fluency'];
$cseSubjects = [];
$subjectSql = "SELECT subject from subjects where branch='cse'";
$result = $conn->query($subjectSql);
$faculty = [];
while($row = $result->fetch_assoc()) {    
    $cseSubjects[] = $row["subject"];
}

$facultySql = "SELECT faculty from subjects where branch='cse'";
$result = $conn->query($facultySql);
while($row = $result->fetch_assoc()) {    
    $faculty[] = $row["faculty"];
}

function getRating($columnName, $facultyName) {
    include 'connect.php';
    $sql = "SELECT AVG($columnName) from rating where faculty='$facultyName'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return round($row["AVG($columnName)"],1);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>AVNIET server</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="src/css/flat-ui.css">
    <script src="lib/jquery/jquery.js"></script>

    <script src="lib/bootstrap/bootstrap.js"></script>
</head>
<body>
<h3>CSE</h3>
<table class="table table-striped">
<thead>
  <tr>
    <th>#</th>
    <th>Faculty</th>
    <th>Subject</th>
    <th>Teaching</th>
    <th>Class Maintenance</th>
    <th>Doubts Clarification</th>
    <th>English Fluency</th>
    <th>Overall Rating</th>
  </tr>
</thead>
<tbody>
  <?php 
  $temp = 0;
  foreach($faculty as $facultyName) {      
      $temp = $temp + 1;
      $teaching = getRating($ratingType[0], $facultyName);
      $maintenance = getRating($ratingType[1], $facultyName);
      $doubtsClarification = getRating($ratingType[2], $facultyName);
      $englishFluency = getRating($ratingType[3], $facultyName);
      $overallRating = ($teaching + $maintenance + $doubtsClarification + $englishFluency)/4;
  ?>
  <tr>
    <th scope="row"><?=$temp?></th>
    <td><?=$facultyName?></td>
    <td><?=$cseSubjects[$temp-1]?></td>
    <td><?=$teaching?></td>
    <td><?=$maintenance?></td>
    <td><?=$doubtsClarification?></td>
    <td><?=$englishFluency?></td>
    <td><?=round($overallRating,1)?></td>
    <td></td>
  </tr>
  <?php 
   }
  ?>
</tbody>
<!---
</table>
<h3>ECE</h3>
  <table class="table table-striped">
<thead>
  <tr>
    <th>#</th>
    <th>Faculty</th>
    <th>Subject</th>
    <th>Teaching</th>
    <th>Class Maintenance</th>
    <th>Doubts Clarification</th>
    <th>English Fluency</th>
    <th>Overall Rating</th>
  </tr>
</thead>

<tbody>
<?php
include 'connect.php';
$ratingType = ['teaching', 'class_maintenance', 'doubt_clarification', 'english_fluency'];
$eceSubjects = [];
$subjectSql = "SELECT subject from subjects where branch='cse'";
$result = $conn->query($subjectSql);
$faculty = [];
while($row = $result->fetch_assoc()) {    
    $eceSubjects[] = $row["subject"];
}

$facultySql = "SELECT faculty from subjects where branch='cse'";
$result = $conn->query($facultySql);
while($row = $result->fetch_assoc()) {    
    $faculty[] = $row["faculty"];
}

?>
  <?php 
  $temp = 0;
  foreach($faculty as $facultyName) {      
      $temp = $temp + 1;
      $teaching = getRating($ratingType[0], $facultyName);
      $maintenance = getRating($ratingType[1], $facultyName);
      $doubtsClarification = getRating($ratingType[2], $facultyName);
      $englishFluency = getRating($ratingType[3], $facultyName);
      $overallRating = ($teaching + $maintenance + $doubtsClarification + $englishFluency)/4;
  ?>
  <tr>
    <th scope="row"><?=$temp?></th>
    <td><?=$facultyName?></td>
    <td><?=$eceSubjects[$temp-1]?></td>
    <td><?=$teaching?></td>
    <td><?=$maintenance?></td>
    <td><?=$doubtsClarification?></td>
    <td><?=$englishFluency?></td>
    <td><?=round($overallRating,1)?></td>
    <td></td>
  </tr>
  <?php 
   }
  ?>
</tbody>
</table>-->
</body>
</html>