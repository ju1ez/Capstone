<?php
$semesterNum = 1;
echo '<table class="table  table-hover table-condensed ">
<thead >
<tr >
  <th>Semester</th>
  <th>Course 1</th>
  <th>Course 2</th>
  <th>Course 3</th>
  <th>Course 4</th>
  <th>Course 5</th>
  <th>Course 6</th>
</tr>
</thead>';
foreach($roadmap as $semester){
echo '<tbody><tr>';
echo '<td>'.$semesterNum.'</td>';
$courseNum=1;
foreach($semester as $courses){
echo '<td>'.$courses['name'];
echo '<div>
<form action="plan.php" method="post">
<input type="hidden" name="course_name" value='.$courses['name'].'>
<input type="hidden" name="semesterNum" value='.$semesterNum.'>
<input type="hidden" name="courseNum" value='.$courseNum.'>
<input type="hidden" name="roadmap" value='.$encoded=base64_encode(serialize($roadmap)).'>
<button name="PrevSemester" type="submit" class="icon-button"><span class="glyphicon glyphicon-chevron-up"></span></button>
<button name="NextSemester" type="submit" class="icon-button"><span class="glyphicon glyphicon-chevron-down"></span></button>
</form>
</div>';
echo '</td>';
$courseNum++;}
echo '</tr>';
$semesterNum++;}
echo '<tbody></table>';
?>          
