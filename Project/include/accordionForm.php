<?php
include 'include/requirementDropdown.php';

$semesterNum=1;
foreach($roadmap as $semester){
    echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">';
            echo '<h4 class="myPanel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse'.$semesterNum.'">Semester '.$semesterNum.'</a></h4>';
        echo '</div>';
        echo '<div class="panel-collapse collapse" id="collapse'.$semesterNum.'">';
            echo '<div class="panel-body">';
                //include 'include/dropdowns.php';
                foreach($semester as $course){
                    echo '<div class="form-group">';
                        echo '<label>'.$course['course'].': '.$course['name'].'</label>';
                        if($course['critical']=='n'){
                            formRequirement($pdo, $course['requirement']);
                        }
                    echo '</div>';
                }
            echo '</div>';
        echo '</div>';
    echo '</div>';
  $semesterNum++;
}



?>