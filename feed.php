<?php 
    include 'connect.php';
    $roll_no = $_REQUEST['rollno'];
    $faculty = array($_REQUEST['fac1'],$_REQUEST['fac2'],$_REQUEST['fac3'],$_REQUEST['fac4'],$_REQUEST['fac5'],$_REQUEST['fac6']);
    $subs = array($_REQUEST['sub1'],$_REQUEST['sub2'],$_REQUEST['sub3'],$_REQUEST['sub4'],$_REQUEST['sub5'],$_REQUEST['sub6']);
    $year = $_REQUEST['year'];
    $sec = $_REQUEST['section'];
    $branch = $_REQUEST['branch'];
    $tSubs = array($_REQUEST['tSub1'],$_REQUEST['tSub2'],$_REQUEST['tSub3'],$_REQUEST['tSub4'],$_REQUEST['tSub5'],$_REQUEST['tSub6']);
    $cMSubs = array($_REQUEST['cMSub1'],$_REQUEST['cMSub2'],$_REQUEST['cMSub3'],$_REQUEST['cMSub4'],$_REQUEST['cMSub5'],$_REQUEST['cMSub6']);
    $dCSubs = array($_REQUEST['dCSub1'],$_REQUEST['dCSub2'],$_REQUEST['dCSub3'],$_REQUEST['dCSub4'],$_REQUEST['dCSub5'],$_REQUEST['dCSub6']);
    $eFSubs = array($_REQUEST['eFSub1'],$_REQUEST['eFSub2'],$_REQUEST['eFSub3'],$_REQUEST['eFSub4'],$_REQUEST['eFSub5'],$_REQUEST['eFSub6']);
    for ($x = 0; $x < 6; $x++) {
        $sql = "INSERT INTO rating(roll_number,subject,faculty,year,branch,section,teaching,class_maintenance,doubt_clarification,english_fluency) VALUES('".$roll_no."','".$subs[$x]."','".$faculty[$x]."',".$year.",'".$branch."','".$sec."',".$tSubs[$x].",".$cMSubs[$x].",".$dCSubs[$x].",".$eFSubs[$x].")";
        $result = $conn->query($sql);
    }
    echo "<script>window.top.location = 'thankyou.html'</script>";
?>