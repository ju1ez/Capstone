<?php 
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
    else if($_SERVER['REQUEST_METHOD'] == "POST"){
      $roadmap = unserialize(base64_decode($_POST["roadmap"]));
      foreach($roadmap as &$SEMESTERREAL){
        foreach($SEMESTERREAL as &$COURSEREAL){
            if($COURSEREAL['critical']=='n'){
                if(isset($_POST[$COURSEREAL['requirement']])){
                    if($_POST[$COURSEREAL['requirement']] != 'Select...'){
                        $sqlCourseID = $_POST[$COURSEREAL['requirement']];
                        $sql = "SELECT * FROM courses WHERE courseID = '".$sqlCourseID."'";
                        $result = $pdo->query($sql);
                        while ($row = $result->fetch()) {   
                          $COURSEREAL['course'] = $_POST[$COURSEREAL['requirement']];
                          $COURSEREAL['name'] = $row['CourseTitle'];
                        }
                    }
                }
            }
        }
      }
    }
    else{
      $sql = "SELECT * FROM templates WHERE Degree = 'BS' AND Major = 'CS'";
      $result = $pdo->query($sql);
      while ($row = $result->fetch()) {   
        $string = $row['Roadmap'];
        $roadmap = unserialize($string);
      }   
      //$roadmap = unserialize('a:8:{i:0;a:6:{i:0;a:7:{s:6:"course";s:7:"CS13011";s:4:"name";s:28:"CSIA: PROCEDURAL PROGRAMMING";s:8:"courseID";s:7:"4213011";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:1;a:7:{s:6:"course";s:7:"CS13012";s:4:"name";s:33:"CSIB: OBJECT ORIENTED PROGRAMMING";s:8:"courseID";s:7:"4213012";s:7:"prereqs";a:0:{}s:6:"coreqs";a:1:{i:0;s:7:"4213011";}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:2;a:7:{s:6:"course";s:9:"MATH12002";s:4:"name";s:32:"ANALYTIC GEOMETRY AND CALCULUS I";s:8:"courseID";s:8:"11412002";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:3;a:7:{s:6:"course";s:4:"KCMP";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:5:"KCMP1";}i:4;a:7:{s:6:"course";s:2:"GE";s:4:"name";s:16:"General Elective";s:8:"courseID";s:2:"10";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:3:"GE1";}i:5;a:7:{s:6:"course";s:7:"UC10097";s:4:"name";s:21:"FIRST YEAR EXPERIENCE";s:8:"courseID";s:8:"16810097";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}}i:1;a:4:{i:0;a:7:{s:6:"course";s:7:"CS23001";s:4:"name";s:38:"CSII: DATA STRUCTURES AND ABSTRACTION ";s:8:"courseID";s:7:"4223001";s:7:"prereqs";a:1:{i:0;s:7:"4213012";}s:6:"coreqs";a:1:{i:0;s:7:"4223022";}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:1;a:7:{s:6:"course";s:9:"MATH12003";s:4:"name";s:33:"ANALYTIC GEOMETRY AND CALCULUS II";s:8:"courseID";s:8:"11412003";s:7:"prereqs";a:1:{i:0;s:8:"11412002";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:2;a:7:{s:6:"course";s:7:"CS23022";s:4:"name";s:26:"DISCRETE STRUCTURES FOR CS";s:8:"courseID";s:7:"4223022";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:3;a:7:{s:6:"course";s:4:"KCMP";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:5:"KCMP2";}}i:2;a:4:{i:0;a:7:{s:6:"course";s:7:"CS33211";s:4:"name";s:17:"OPERATING SYSTEMS";s:8:"courseID";s:7:"4233211";s:7:"prereqs";a:1:{i:0;s:7:"4223001";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:1;a:7:{s:6:"course";s:7:"CS35101";s:4:"name";s:21:"COMPUTER ARCHITECTURE";s:8:"courseID";s:7:"4235101";s:7:"prereqs";a:1:{i:0;s:7:"4213012";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:2;a:7:{s:6:"course";s:9:"MATH22005";s:4:"name";s:34:"ANALYTIC GEOMETRY AND CALCULUS III";s:8:"courseID";s:8:"11422005";s:7:"prereqs";a:1:{i:0;s:8:"11412003";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:3;a:7:{s:6:"course";s:2:"FL";s:4:"name";s:16:"Foreign Language";s:8:"courseID";s:2:"30";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:3:"FL1";}}i:3;a:4:{i:0;a:7:{s:6:"course";s:7:"CS33007";s:4:"name";s:38:"INTRODUCTION TO DATABASE SYSTEM DESIGN";s:8:"courseID";s:7:"4233007";s:7:"prereqs";a:1:{i:0;s:7:"4223001";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:1;a:7:{s:6:"course";s:7:"CS35201";s:4:"name";s:31:"COMPUTER COMMUNICATION NETWORKS";s:8:"courseID";s:7:"4235201";s:7:"prereqs";a:1:{i:0;s:7:"4223001";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:2;a:7:{s:6:"course";s:2:"FL";s:4:"name";s:16:"Foreign Language";s:8:"courseID";s:2:"30";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:3:"FL2";}i:3;a:7:{s:6:"course";s:3:"KFA";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:3:"KFA";}}i:4;a:5:{i:0;a:7:{s:6:"course";s:7:"CS33901";s:4:"name";s:20:"SOFTWARE ENGINEERING";s:8:"courseID";s:7:"4233901";s:7:"prereqs";a:1:{i:0;s:7:"4223001";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:1;a:7:{s:6:"course";s:7:"CS44001";s:4:"name";s:28:"CS III: PROGRAMMING PATTERNS";s:8:"courseID";s:7:"4244001";s:7:"prereqs";a:1:{i:0;s:7:"4223001";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:2;a:7:{s:6:"course";s:7:"CS46101";s:4:"name";s:33:"DESIGN AND ANALYSIS OF ALGORITHMS";s:8:"courseID";s:7:"4246101";s:7:"prereqs";a:2:{i:0;s:7:"4223001";i:1;s:8:"11412003";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:3;a:7:{s:6:"course";s:4:"KHUM";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"KHUM";}i:4;a:7:{s:6:"course";s:11:"KFA or KHUM";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:7:"KFAKHUM";}}i:5;a:5:{i:0;a:7:{s:6:"course";s:7:"CS33101";s:4:"name";s:34:"STRUCTURE OF PROGRAMMING LANGUAGES";s:8:"courseID";s:7:"4233101";s:7:"prereqs";a:1:{i:0;s:7:"4223001";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:1;a:7:{s:6:"course";s:13:"CS30000/40000";s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"UE31";}i:2;a:7:{s:6:"course";s:13:"CS30000/40000";s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"UE32";}i:3;a:7:{s:6:"course";s:3:"KSS";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"KSS1";}i:4;a:7:{s:6:"course";s:3:"KBS";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:3:"KBS";}}i:6;a:5:{i:0;a:7:{s:6:"course";s:7:"CS49901";s:4:"name";s:8:"Capstone";s:8:"courseID";s:7:"4249901";s:7:"prereqs";a:3:{i:0;s:7:"4233007";i:1;s:7:"4233901";i:2;s:7:"4235201";}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"y";s:11:"requirement";s:5:"major";}i:1;a:7:{s:6:"course";s:13:"CS30000/40000";s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"UE33";}i:2;a:7:{s:6:"course";s:7:"CS40000";s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"UE41";}i:3;a:7:{s:6:"course";s:3:"KSS";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"KSS2";}i:4;a:7:{s:6:"course";s:4:"KLAB";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"KLAB";}}i:7;a:5:{i:0;a:7:{s:6:"course";s:7:"CS40000";s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"UE42";}i:1;a:7:{s:6:"course";s:7:"CS40000";s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:4:"UE43";}i:2;a:7:{s:6:"course";s:3:"ANY";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:5:"KANY1";}i:3;a:7:{s:6:"course";s:3:"ANY";s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:5:"KANY2";}i:4;a:7:{s:6:"course";s:2:"GE";s:4:"name";s:16:"General Elective";s:8:"courseID";s:2:"10";s:7:"prereqs";a:0:{}s:6:"coreqs";a:0:{}s:8:"critical";s:1:"n";s:11:"requirement";s:3:"GE2";}}}');
    }
?>