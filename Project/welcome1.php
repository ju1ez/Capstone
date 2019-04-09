<?php 
/*
    require_once "config/session_config.php"; 
    include 'config/config.php';
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    //$_SESSION['roadmap"];
*/
  $roadmap;

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["PrevSemester"]))
    {
        $roadmap = unserialize(base64_decode($_POST["roadmap"]));
        if(($_POST["semesterNum"]-1) > 0){
          $tempCourse = $roadmap[$_POST["semesterNum"]-1][$_POST["courseNum"]-1];
          unset($roadmap[$_POST["semesterNum"]-1][$_POST["courseNum"]-1]);
          sort($roadmap[$_POST["semesterNum"]-1]);
          $roadmap[$_POST["semesterNum"]-2][]=$tempCourse;
          sort($roadmap[$_POST["semesterNum"]-2]);
          $roadmap = array_map('array_filter', $roadmap);
          $roadmap = array_filter($roadmap);
        }
    }
    else if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["NextSemester"])){
        $roadmap = unserialize(base64_decode($_POST["roadmap"]));
        $tempCourse = $roadmap[$_POST["semesterNum"]-1][$_POST["courseNum"]-1];
        unset($roadmap[$_POST["semesterNum"]-1][$_POST["courseNum"]-1]);
        sort($roadmap[$_POST["semesterNum"]-1]);
        $roadmap[$_POST["semesterNum"]][]=$tempCourse;
        sort($roadmap[$_POST["semesterNum"]]);
    }
    /*
    else if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["sel1"])){
      //include 'config/config.php';
    
      $sql = 'SELECT Roadmap FROM Templates WHERE Degree=:degree and Major=:major';
      $degree=$_POST["sel1"];
      $major=$_POST["sel2"];
      $statement = $pdo->prepare($sql);
      $statement->bindValue(':degree', $degree);
      $statement->bindValue(':major', $major);
      $statement->execute();
    
      while ($row = $statement->fetch()) {
        $serialized_data = $row['Roadmap'];
      }
      $_SESSION["roadmap"] = unserialize($serialized_data);
    }
    */
    else{   
      $roadmap = unserialize('a:8:{i:0;a:6:{i:0;a:3:{s:4:"name";s:5:"CS1-A";s:8:"courseID";s:7:"4213011";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:5:"CS1-B";s:8:"courseID";s:7:"4213012";s:8:"critical";s:1:"n";}i:2;a:3:{s:4:"name";s:5:"Calc1";s:8:"courseID";s:8:"11412002";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:4;a:3:{s:4:"name";s:16:"General Elective";s:8:"courseID";s:2:"10";s:8:"critical";s:1:"n";}i:5;a:3:{s:4:"name";s:3:"FYE";s:8:"courseID";s:8:"16810097";s:8:"critical";s:1:"n";}}i:1;a:4:{i:0;a:3:{s:4:"name";s:3:"CS2";s:8:"courseID";s:7:"4223001";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:5:"Calc2";s:8:"courseID";s:8:"11412003";s:8:"critical";s:1:"y";}i:2;a:3:{s:4:"name";s:15:"Data Structures";s:8:"courseID";s:7:"4223022";s:8:"critical";s:1:"y";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:2;a:4:{i:0;a:3:{s:4:"name";s:17:"Operating Systems";s:8:"courseID";s:7:"4233211";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:21:"Computer Architecture";s:8:"courseID";s:7:"4235101";s:8:"critical";s:1:"y";}i:2;a:3:{s:4:"name";s:5:"Calc3";s:8:"courseID";s:8:"11422005";s:8:"critical";s:1:"y";}i:3;a:3:{s:4:"name";s:16:"Foreign Language";s:8:"courseID";s:2:"30";s:8:"critical";s:1:"n";}}i:3;a:4:{i:0;a:3:{s:4:"name";s:15:"Database Design";s:8:"courseID";s:7:"4233007";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:31:"Computer Communication Networks";s:8:"courseID";s:7:"4235201";s:8:"critical";s:1:"y";}i:2;a:3:{s:4:"name";s:16:"Foreign Language";s:8:"courseID";s:2:"30";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:4;a:5:{i:0;a:3:{s:4:"name";s:20:"Software Engineering";s:8:"courseID";s:7:"4233901";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:3:"CS3";s:8:"courseID";s:7:"4244001";s:8:"critical";s:1:"y";}i:2;a:3:{s:4:"name";s:10:"Algortihms";s:8:"courseID";s:7:"4246101";s:8:"critical";s:1:"y";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:4;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:5;a:4:{i:0;a:3:{s:4:"name";s:22:"Structure of Prog Lang";s:8:"courseID";s:7:"4233101";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:8:"critical";s:1:"n";}i:2;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:6;a:5:{i:0;a:3:{s:4:"name";s:8:"Capstone";s:8:"courseID";s:7:"4249901";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:8:"critical";s:1:"n";}i:2;a:3:{s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:4;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:7;a:4:{i:0;a:3:{s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:8:"critical";s:1:"n";}i:1;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:2;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:16:"General Elective";s:8:"courseID";s:2:"10";s:8:"critical";s:1:"n";}}}');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Graduation, The Fastest Option</title>
  <!-- Favicon -->
  <link href="images/icon.png" rel="icon">
  <!-- CSS -->
  <link href="css/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/vis.min.css" rel="stylesheet" type="text/css">
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/vis.min.js"></script>
  <script type="text/javascript" src="js/nodes.js"></script>
</head>
<body id="mybackground" onload="draw();">
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <div class="row">
          <?php include "nav.php" ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1>Welcome!</h1>
          </div>
        </div>
          <div class="row">
            <div class="col-md-6">
              <div class="myContent">
              
              
            <?php
                  $semesterNum = 1;
                  echo '<table border="1">';
                  echo '<tr><th>Semester</th><th>Course 1</th><th>Course 2</th><th>Course 3</th><th>Course 4</th><th>Course 5</th><th>Course 6</th></tr>';
                  foreach( $roadmap as $semester )
                  {
                    echo '<tr>';
                	  echo '<td>'.$semesterNum.'</td>';
                    $courseNum=1;
                    foreach( $semester as $courses )
                    {
                        echo '<td>'.$courses['name'];
                        echo '<div>
                        <form action="welcome1.php" method="post">
                        <input type="hidden" name="course_name" value='.$courses['name'].'>
                              <input type="hidden" name="semesterNum" value='.$semesterNum.'>
                              <input type="hidden" name="courseNum" value='.$courseNum.'>
                              <input type="hidden" name="roadmap" value='.$encoded=base64_encode(serialize($roadmap)).'>
                              <input type="submit" class="button" name="PrevSemester" value="&uarr;"></input>
                              </form>
                        <form action="welcome1.php" method="post">
                              <input type="hidden" name="course_name" value='.$courses['name'].'>
                              <input type="hidden" name="semesterNum" value='.$semesterNum.'>
                              <input type="hidden" name="courseNum" value='.$courseNum.'>
                              <input type="hidden" name="roadmap" value='.$encoded=base64_encode(serialize($roadmap)).'>
                              <input type="submit" class="button" name="NextSemester" value="&darr;" style ="float: right;"/>
                              </form>
                        </div>';
                        
                        
                        echo '</td>';
                        $courseNum++;
                    }
                    echo '</tr>';
                	$semesterNum++;
                  }
                echo '</table>';



            ?>
              
            <div class="col-md-6">
                <button type="button" class="btn btn-default" id="btn-UD" value="Up-Down">Up-Down</button>
                <button type="button" class="btn btn-primary" id="btn-DU" value="Down-Up">Down-Up</button>
                <button type="button" class="btn btn-info" id="btn-LR" value="Left-Right">Left-Right</button>
                <button type="button" class="btn btn-success" id="btn-RL" value="Right-Left">Right-Left</button>
                <input type="hidden" id="direction" value="UD">
            <br /><br />
              <div id="mynetwork">
              </div>
              <p id="selection"></p>
              <script type="text/javascript" src="js/nodeSelect.js"></script>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
