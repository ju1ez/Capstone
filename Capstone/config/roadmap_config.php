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

    else{   
      $roadmap = unserialize('a:8:{i:0;a:6:{i:0;a:3:{s:4:"name";s:5:"CS1-A";s:8:"courseID";s:7:"4213011";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:5:"CS1-B";s:8:"courseID";s:7:"4213012";s:8:"critical";s:1:"n";}i:2;a:3:{s:4:"name";s:5:"Calc1";s:8:"courseID";s:8:"11412002";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:4;a:3:{s:4:"name";s:16:"General Elective";s:8:"courseID";s:2:"10";s:8:"critical";s:1:"n";}i:5;a:3:{s:4:"name";s:3:"FYE";s:8:"courseID";s:8:"16810097";s:8:"critical";s:1:"n";}}i:1;a:4:{i:0;a:3:{s:4:"name";s:3:"CS2";s:8:"courseID";s:7:"4223001";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:5:"Calc2";s:8:"courseID";s:8:"11412003";s:8:"critical";s:1:"y";}i:2;a:3:{s:4:"name";s:15:"Data Structures";s:8:"courseID";s:7:"4223022";s:8:"critical";s:1:"y";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:2;a:4:{i:0;a:3:{s:4:"name";s:17:"Operating Systems";s:8:"courseID";s:7:"4233211";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:21:"Computer Architecture";s:8:"courseID";s:7:"4235101";s:8:"critical";s:1:"y";}i:2;a:3:{s:4:"name";s:5:"Calc3";s:8:"courseID";s:8:"11422005";s:8:"critical";s:1:"y";}i:3;a:3:{s:4:"name";s:16:"Foreign Language";s:8:"courseID";s:2:"30";s:8:"critical";s:1:"n";}}i:3;a:4:{i:0;a:3:{s:4:"name";s:15:"Database Design";s:8:"courseID";s:7:"4233007";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:31:"Computer Communication Networks";s:8:"courseID";s:7:"4235201";s:8:"critical";s:1:"y";}i:2;a:3:{s:4:"name";s:16:"Foreign Language";s:8:"courseID";s:2:"30";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:4;a:5:{i:0;a:3:{s:4:"name";s:20:"Software Engineering";s:8:"courseID";s:7:"4233901";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:3:"CS3";s:8:"courseID";s:7:"4244001";s:8:"critical";s:1:"y";}i:2;a:3:{s:4:"name";s:10:"Algortihms";s:8:"courseID";s:7:"4246101";s:8:"critical";s:1:"y";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:4;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:5;a:4:{i:0;a:3:{s:4:"name";s:22:"Structure of Prog Lang";s:8:"courseID";s:7:"4233101";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:8:"critical";s:1:"n";}i:2;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:6;a:5:{i:0;a:3:{s:4:"name";s:8:"Capstone";s:8:"courseID";s:7:"4249901";s:8:"critical";s:1:"y";}i:1;a:3:{s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:8:"critical";s:1:"n";}i:2;a:3:{s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:4;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}}i:7;a:4:{i:0;a:3:{s:4:"name";s:17:"CS Upper Elective";s:8:"courseID";s:7:"4230000";s:8:"critical";s:1:"n";}i:1;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:2;a:3:{s:4:"name";s:9:"Kent Core";s:8:"courseID";s:2:"20";s:8:"critical";s:1:"n";}i:3;a:3:{s:4:"name";s:16:"General Elective";s:8:"courseID";s:2:"10";s:8:"critical";s:1:"n";}}}');
    }
?>