<?php
  function formRequirement($pdo, $requirement){

    //KCMP
    if($requirement == 'KCMP1' || $requirement == 'KCMP2'  ){
          echo '<select name = "'.$requirement.'" class="form-control">';
            echo '<option selected>Select...</option>';
              echo '<optgroup label="KCMP - Kent Core Requirement">';
                echo '<option>';
                  $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE requirements.Requirement = "KCMP"';
                  $result = $pdo->query($sql);
                  while ($row = $result->fetch()) {         
                  echo '<option value="'.$row['CourseID'].'"';
                  if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
                  echo ' selected ';
                  echo '>';
                  echo $row['CourseID'].': '.$row['CourseTitle'];
                  echo '</option>';
                  }                 
                echo '</option>';
              echo '</optgroup>';
            echo '</select>';
    }

    //KFA
    if($requirement == 'KFA'){
        echo '<select name = "'.$requirement.'" class="form-control">';
          echo '<option selected>Select...</option>';
            echo '<optgroup label="KFA - Kent Core Requirement">';
              echo '<option>';
                $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE requirements.Requirement="KFA"';
                $result = $pdo->query($sql);
                while ($row = $result->fetch()) {         
                echo '<option value="'.$row['CourseID'].'"';
                if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
                echo ' selected ';
                echo '>';
                echo $row['CourseID'].': '.$row['CourseTitle'];
                echo '</option>';
                }                 
              echo '</option>';
            echo '</optgroup>';
          echo '</select>';
  }

  //KHUM
  if($requirement == 'KHUM'){
    echo '<select name = "'.$requirement.'" class="form-control">';
      echo '<option selected>Select...</option>';
        echo '<optgroup label="KHUM - Kent Core Requirement">';
          echo '<option>';
            $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE requirements.Requirement="KHUM"';
            $result = $pdo->query($sql);
            while ($row = $result->fetch()) {         
            echo '<option value="'.$row['CourseID'].'"';
            if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
            echo ' selected ';
            echo '>';
            echo $row['CourseID'].': '.$row['CourseTitle'];
            echo '</option>';
            }                 
          echo '</option>';
        echo '</optgroup>';
      echo '</select>';
    }

    //KFAKHUM
    if($requirement == 'KFAKHUM' ){
        echo '<select name = "'.$requirement.'" class="form-control">';
          echo '<option selected>Select...</option>';
            echo '<optgroup label="KFA/KHUM - Kent Core Requirement">';
              echo '<option>';
                $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE (requirements.Requirement="KHUM" OR requirements.Requirement="KFA")';
                $result = $pdo->query($sql);
                while ($row = $result->fetch()) {         
                echo '<option value="'.$row['CourseID'].'"';
                if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
                echo ' selected ';
                echo '>';
                echo $row['CourseID'].': '.$row['CourseTitle'];
                echo '</option>';
                }                 
              echo '</option>';
            echo '</optgroup>';
          echo '</select>';
  }

  //KSS
  if($requirement == 'KSS1' || $requirement == 'KSS2'  ){
    echo '<select name = "'.$requirement.'" class="form-control">';
      echo '<option selected>Select...</option>';
        echo '<optgroup label="KSS - Kent Core Requirement">';
          echo '<option>';
            $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE requirements.Requirement="KSS"';
            $result = $pdo->query($sql);
            while ($row = $result->fetch()) {         
            echo '<option value="'.$row['CourseID'].'"';
            if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
            echo ' selected ';
            echo '>';
            echo $row['CourseID'].': '.$row['CourseTitle'];
            echo '</option>';
            }                 
          echo '</option>';
        echo '</optgroup>';
      echo '</select>';
    }


    //KBS
    if($requirement == 'KBS' ){
        echo '<select name = "'.$requirement.'" class="form-control">';
          echo '<option selected>Select...</option>';
            echo '<optgroup label="KBS - Kent Core Requirement">';
              echo '<option>';
                $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE requirements.Requirement="KBS"';
                $result = $pdo->query($sql);
                while ($row = $result->fetch()) {         
                echo '<option value="'.$row['CourseID'].'"';
                if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
                echo ' selected ';
                echo '>';
                echo $row['CourseID'].': '.$row['CourseTitle'];
                echo '</option>';
                }                 
              echo '</option>';
            echo '</optgroup>';
          echo '</select>';
  }

  //KLAB
  if($requirement == 'KLAB'  ){
    echo '<select name = "'.$requirement.'" class="form-control">';
      echo '<option selected>Select...</option>';
        echo '<optgroup label="KLAB - Kent Core Requirement">';
          echo '<option>';
            $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE requirements.Requirement="KLAB"';
            $result = $pdo->query($sql);
            while ($row = $result->fetch()) {         
            echo '<option value="'.$row['CourseID'].'"';
            if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
            echo ' selected ';
            echo '>';
            echo $row['CourseID'].': '.$row['CourseTitle'];
            echo '</option>';
            }                 
          echo '</option>';
        echo '</optgroup>';
      echo '</select>';
    }

    //FL
    if($requirement == 'FL1' || $requirement == 'FL2'  ){
        echo '<select name = "'.$requirement.'" class="form-control">';
          echo '<option selected>Select...</option>';
            echo '<optgroup label="Foreign Language - Kent Core Requirement">';
              echo '<option>';
                $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE requirements.Requirement="FL"';
                $result = $pdo->query($sql);
                while ($row = $result->fetch()) {         
                echo '<option value="'.$row['CourseID'].'"';
                if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
                echo ' selected ';
                echo '>';
                echo $row['CourseID'].': '.$row['CourseTitle'];
                echo '</option>';
                }                 
              echo '</option>';
            echo '</optgroup>';
          echo '</select>';
  }

  //GE
  if($requirement == 'GE1' || $requirement == 'GE2'  ){
    echo '<select name = "'.$requirement.'" class="form-control">';
      echo '<option selected>Select...</option>';
        echo '<optgroup label="General Electives">';
          echo '<option>';
            $sql = 'SELECT * FROM courses';
            $result = $pdo->query($sql);
            while ($row = $result->fetch()) {         
            echo '<option value="'.$row['CourseID'].'"';
            if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
            echo ' selected ';
            echo '>';
            echo $row['CourseID'].': '.$row['CourseTitle'];
            echo '</option>';
            }                 
          echo '</option>';
        echo '</optgroup>';
      echo '</select>';
    }

    //KANY
    if($requirement == 'KANY1' || $requirement == 'KANY2'  ){
        echo '<select name = "'.$requirement.'" class="form-control">';
          echo '<option selected>Select...</option>';
            echo '<optgroup label="Any Additional Kent Core Requirement">';
              echo '<option>';
                $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE (requirements.Requirement="KCMP" OR requirements.Requirement="KMCR" OR requirements.Requirement="KHUM" OR requirements.Requirement="KFA" OR requirements.Requirement="KSS" OR requirements.Requirement="KBS" OR requirements.Requirement="KLAB")';
                $result = $pdo->query($sql);
                while ($row = $result->fetch()) {         
                echo '<option value="'.$row['CourseID'].'"';
                if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
                echo ' selected ';
                echo '>';
                echo $row['CourseID'].': '.$row['CourseTitle'];
                echo '</option>';
                }                 
              echo '</option>';
            echo '</optgroup>';
          echo '</select>';
  }

  //UE3
  if($requirement == 'UE31' || $requirement == 'UE32' || $requirement == 'UE33'  ){
    echo '<select name = "'.$requirement.'" class="form-control">';
      echo '<option selected>Select...</option>';
        echo '<optgroup label="General Electives">';
          echo '<option>';
            $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE (requirements.Requirement="UE3" OR requirements.Requirement="UE4")';
            //'SELECT * FROM courses WHERE CourseKey LIKE "423%" OR CourseKey LIKE "424%"';
            $result = $pdo->query($sql);
            while ($row = $result->fetch()) {         
            echo '<option value="'.$row['CourseID'].'"';
            if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
            echo ' selected ';
            echo '>';
            echo $row['CourseID'].': '.$row['CourseTitle'];
            echo '</option>';
            }                 
          echo '</option>';
        echo '</optgroup>';
      echo '</select>';
    }


  //UE4
  if($requirement == 'UE41' || $requirement == 'UE42' || $requirement == 'UE43'  ){
    echo '<select name = "'.$requirement.'" class="form-control">';
      echo '<option selected>Select...</option>';
        echo '<optgroup label="General Electives">';
          echo '<option>';
            $sql = 'SELECT * FROM requirements INNER JOIN courses ON requirements.CourseID = courses.CourseID WHERE requirements.Requirement="UE4"';
            //'SELECT * FROM courses WHERE CourseKey LIKE "424%"';
            $result = $pdo->query($sql);
            while ($row = $result->fetch()) {         
            echo '<option value="'.$row['CourseID'].'"';
            if (isset($_GET[$requirement]) && $row['CourseID'] == $_GET[$requirement]) 
            echo ' selected ';
            echo '>';
            echo $row['CourseID'].': '.$row['CourseTitle'];
            echo '</option>';
            }                 
          echo '</option>';
        echo '</optgroup>';
      echo '</select>';
    }

    
  

  }
?>