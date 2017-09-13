<!DOCTYPE html>
<html lang="en">

<head>

    <title>AVNIET server</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="src/css/flat-ui.css">
    <link rel="stylesheet" href="src/css/feedback.css">
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

    <?php

    function getSubject($id) {
        if( !isset($_REQUEST['user']) )
        {
            echo "<script>window.top.location='index.html'</script>";
        }
        include 'connect.php';    
        $sql = "SELECT subject FROM `subjects` WHERE id=".$id;
        $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            return $row["subject"];
        }
    } else {
        return "Subject";
    }
    }

    function getFaculty($id) {
        include 'connect.php';    
        $sql = "SELECT faculty FROM `subjects` WHERE id=".$id;
        $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            return $row["faculty"];
        }
    } else {
        return "Faculty";
    }
    }
    
    function getRollNo(){
        
            if(isset($_REQUEST['user'])){
                return $_REQUEST['user'];
            }
    }

    function getBranch(){
        return $_REQUEST['branch'];
    }

    function getYear(){
        return $_REQUEST['year'];
    }
    function getSection(){
        return $_REQUEST['section'];
    }
    ?>
</head>

<body>
    <div class="container">
        <h3>Feedback
            <div id='userLogStatus' class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo getRollNo() ?>
                <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu-right mydropdown">
                    <li><a>Change Password</a></li>
                    <li onclick="logout()" ><a>Log Out</a></li>
                </ul>
            </div>
        </h3>
        </br>
        <div id='layout'>
            <form action="feed.php" method='post'>
            
            <input type="hidden" name="sub1" value="<?php echo getSubject(1);?>"/>
            <input type="hidden" name="sub2" value="<?php echo getSubject(2);?>"/>
            <input type="hidden" name="sub3" value="<?php echo getSubject(3);?>"/>
            <input type="hidden" name="sub4" value="<?php echo getSubject(4);?>"/>
            <input type="hidden" name="sub5" value="<?php echo getSubject(5);?>"/>
            <input type="hidden" name="sub6" value="<?php echo getSubject(6);?>"/>
            <input type="hidden" name="fac1" value="<?php echo getFaculty(1);?>"/>
            <input type="hidden" name="fac2" value="<?php echo getFaculty(2);?>"/>
            <input type="hidden" name="fac3" value="<?php echo getFaculty(3);?>"/>
            <input type="hidden" name="fac4" value="<?php echo getFaculty(4);?>"/>
            <input type="hidden" name="fac5" value="<?php echo getFaculty(5);?>"/>
            <input type="hidden" name="fac6" value="<?php echo getFaculty(6);?>"/>
            <input type="hidden" name="rollno" value="<?php echo getRollNo();?>"/>
            <input type="hidden" name="branch" value="<?php echo getBranch();?>"/>
            <input type="hidden" name="year" value="<?php echo getYear();?>"/>
            <input type="hidden" name="section" value="<?php echo getSection();?>"/>
                <table class="table">

                    <tr>
                        <td>
                            Subject
                        </td>
                        <td>
                            Faculty
                        </td>
                        <td>
                            Teaching
                        </td>
                        <td>
                            Class Maintenance
                        </td>
                        <td>
                            Doubts Clarification
                        </td>
                        <td>
                            English Fluency
                        </td>
                    </tr>

                    <tr>
                        <td>
                        <?php
                        $id=1;
    include 'subject.php';
    
    ?>
                        </td>
                        <td>
                        <?php
                        $id=1;
    include 'faculty.php';
    
    ?>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='tSub1' class="form-control">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='cMSub1' class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                    </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='dCSub1' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='eFSub1' class="form-control">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?php
                        $id=2;
    include 'subject.php';
    
    ?>
                        </td>
                        <td>
                        <?php
                        $id=2;
    include 'faculty.php';
    
    ?>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='tSub2' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='cMSub2' class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                            </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='dCSub2' class="form-control">
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='eFSub2' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?php
                        $id=3;
    include 'subject.php';
    
    ?>
                        </td>
                        <td>
                        <?php
                        $id=3;
    include 'faculty.php';
    
    ?>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='tSub3' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select  name='cMSub3' class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                            </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='dCSub3' class="form-control">
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='eFSub3' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?php
                        $id=4;
    include 'subject.php';
    
    ?>
                        </td>
                        <td>
                        <?php
                        $id=4;
    include 'faculty.php';
    
    ?>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='tSub4' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='cMSub4' class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                            </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='dCSub4' class="form-control">
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='eFSub4' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?php
                        $id=5;
    include 'subject.php';
    
    ?>
                        </td>
                        <td>
                        <?php
                        $id=5;
    include 'faculty.php';
    
    ?>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='tSub5' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='cMSub5' class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                            </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='dCSub5' class="form-control">
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='eFSub5' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?php
                        $id=6;
    include 'subject.php';
    
    ?>
                        </td>
                        <td>
                        <?php
                        $id=6;
    include 'faculty.php';
    
    ?>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='tSub6' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='cMSub6' class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                            </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='dCSub6' class="form-control">
                                                          <option>1</option>
                                                          <option>2</option>
                                                          <option>3</option>
                                                          <option>4</option>
                                                          <option>5</option>
                                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group rating">
                                <select name='eFSub6' class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                        </select>
                            </div>
                        </td>
                    </tr>

                </table>
                <center><button type="submit" style="max-width:100px;" class="btn btn-primary btn-lg btn-block">Submit</button></center>
            </form>
            <div class="alert alert-info" style="margin-top:20px;">
                Your <strong>Genuine</strong> feedback is greatly appreciated
            </div>
        </div>
    </div>
    <?php
    include 'connect.php';
        $sql = "CREATE TABLE IF NOT EXISTS `feedback`.`subjects` ( `id` INT(4) NOT NULL AUTO_INCREMENT , `subject` CHAR(10) NOT NULL , `faculty` CHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
        $conn->close();
    ?>
    <script>
        function logout(){
            this.top.location = 'index.html'
        }
    </script>
</body>

</html>