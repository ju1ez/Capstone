<?php

$maxNumCourses=0;
foreach($roadmap as $semester){
  $size = count($semester);
  if($size>$maxNumCourses)
    $maxNumCourses = $size;
}

echo '<table class="table table-hover table-condensed"><thead><tr><th></th>';
  for($i=1; $i <= $maxNumCourses; $i++){
    echo'<th> Course ' . $i . '</th>';
  }
echo '</tr></thead>';

$semesterNum=1;
foreach($roadmap as $semester){
  echo '<tbody><tr>';
  echo '<td> Semester ' . $semesterNum . '</td>';
  $courseNum=1;
  //foreach($semester as $courses){
  for($i=1; $i <= $maxNumCourses; $i++){

    //  if($semester[$i-1] != null) causes offset error on localhost using chrome (Andy)
    if(isset($semester[$i-1]) /*!= null*/){ 
      echo '<td>' . $semester[$i-1]['course'] . ': ' . $semester[$i-1]['name'];
      echo '<div>';
      echo '<form action="plan.php" method="post">
            <input type="hidden" name="course_name" value='.$semester[$i-1]['name'].'>
            <input type="hidden" name="semesterNum" value='.$semesterNum.'>
            <input type="hidden" name="courseNum" value='.$courseNum.'>
            <input type="hidden" name="roadmap" value='.$encoded=base64_encode(serialize($roadmap)).'>
            <button name="PrevSemester" type="submit" class="icon-button"><span class="glyphicon glyphicon-chevron-up"></span></button>
            <button name="NextSemester" type="submit" class="icon-button"><span class="glyphicon glyphicon-chevron-down"></span></button>
            </form>';
      echo '</div>';
      echo '</td>';
    }else{
      echo '<td></td>';
    }
    $courseNum++;
  }
  echo '</tr>';
  $semesterNum++;
}
echo '<tbody></table>';
?>          
