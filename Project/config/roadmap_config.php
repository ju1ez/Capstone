<?php 
$roadmap;

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["PrevSemester"]))
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
      $_SESSION["modplan"] = $roadmap;
    }
}
else if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["NextSemester"])){
    $roadmap = unserialize(base64_decode($_POST["roadmap"]));
    $tempCourse = $roadmap[$_POST["semesterNum"]-1][$_POST["courseNum"]-1];
    unset($roadmap[$_POST["semesterNum"]-1][$_POST["courseNum"]-1]);
    sort($roadmap[$_POST["semesterNum"]-1]);
    $roadmap[$_POST["semesterNum"]][]=$tempCourse;
    sort($roadmap[$_POST["semesterNum"]]);
    $_SESSION["modplan"] = $roadmap;
}
else if($_SERVER['REQUEST_METHOD'] == "POST"){
      $roadmap = unserialize(base64_decode($_POST["roadmap"]));
      $throwID = 1001;
      foreach($roadmap as &$SEMESTERREAL){
        foreach($SEMESTERREAL as &$COURSEREAL){
            if($COURSEREAL['critical']=='n'){
                if(isset($_POST[$COURSEREAL['requirement']])){
                    if($_POST[$COURSEREAL['requirement']] != 'Select...'){
                        $sqlCourseID = $_POST[$COURSEREAL['requirement']];
                        //add course info
                        $sql = "SELECT * FROM courses WHERE courseID = '".$sqlCourseID."'";
                        $result = $pdo->query($sql);
                        while ($row = $result->fetch()) {   
                          $COURSEREAL['course'] = $_POST[$COURSEREAL['requirement']];
                          $COURSEREAL['name'] = $row['CourseTitle'];
                          if($row['CourseKey'] != null){                          
                            $COURSEREAL['courseID'] = $row['CourseKey'];
                          }                            
                          else{
                            $COURSEREAL['courseID'] = $throwID;
                            $throwID++;
                          }                                                                                                              
                        }
                        //add prereqs
                        unset($COURSEREAL['prereqs']);
                        $COURSEREAL['prereqs'] = array();
                        $sql = "SELECT * FROM prereqs INNER JOIN courses ON prereqs.PrereqID = courses.CourseID WHERE prereqs.courseID = '".$sqlCourseID."'";
                        $result = $pdo->query($sql);
                        while ($row = $result->fetch()) {
                          $COURSEREAL['prereqs'][] = $row['CourseKey'];
                        }
                        //add coreqs
                        unset($COURSEREAL['coreqs']);
                        $COURSEREAL['coreqs'] = array();
                        $sql = "SELECT * FROM coreqs WHERE courseID = '".$sqlCourseID."'";
                        $result = $pdo->query($sql);
                        while ($row = $result->fetch()) {
                          $COURSEREAL['coreqs'][] = $row['CoreqID'];
                        }
                    }
                }
            }
        }
      }
    }

// If user clicked on a plan that they had no save for, load template
else if($_SERVER['REQUEST_METHOD'] === "GET" && !isset($_SESSION["plans"][$_GET["plan"]])) {
  $sql = "SELECT * FROM templates WHERE Degree = 'BS' AND Major = 'CS'";
  $result = $pdo->query($sql);
  while ($row = $result->fetch()) {   
    $string = $row['Roadmap'];
    $roadmap = unserialize($string);
    $_SESSION["plans"][$_GET["plan"]] = $roadmap;
    $_SESSION["modplan"] = $roadmap;
  }   
}
// probably hit refresh
else if(isset($_SESSION["modplan"]) ){
    $roadmap = $_SESSION["modplan"];
}

// If user clicked on a plan they had a save for
else if($_SERVER['REQUEST_METHOD'] === "GET" && isset($_SESSION["plans"][$_GET["plan"]])) {
  $roadmap = $_SESSION["plans"][$_GET["plan"]];

  //check if still serialized and unserialize if so
  $check = @unserialize($roadmap);
  if($check !== false) {
    $roadmap = unserialize($roadmap);
  }
  $_SESSION["modplan"] = $roadmap;
}

?>