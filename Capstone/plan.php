<?php include "config/config.php";
include "config/roadmap_config.php";
require_once "config/session_config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.file.php"?>
<body id="mybackground" onload="draw();">
<script type="text/javascript" src="js/vis.min.js"></script>
<script type="text/javascript" src="js/nodes.js"></script>
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <div class="row">
          <?php include "nav_plan.php" ?>
        </div>
        <div class="row">
        <div class="col-md-12">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <?php include "config/templatetable_config.php" ?>
          </div>
          <div class="col-sm-1"></div>
        </div>
          <div class="row" >
          <div class="col-md-12" style="margin-top: 25pt;">
            <div class="col-md-6" >
              <div class="myContent">
                <form class="myForm" action="get">
                   <div class="form-group">
                     <label>Critical</label>
                      <select name ="courseid" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="Critical Courses">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM courses WHERE SubjectTitle="Computer Science"';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['courseid']) && $row['CourseID'] == $_GET['courseid']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo ': ' . $row['CourseTitle'];
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                   <div class="form-group">
                     <label>Kent Core</label>
                      <select name ="prer" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="Kent Core Requirements">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM courses WHERE ((CategoryTitle="Kent Core" OR CategoryTitle="Major Requirement") AND SubjectTitle="Computer Science")';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['prer']) && $row['CourseID'] == $_GET['prer']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseID'];
                                   echo ': ' . $row['CourseTitle'];
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>
            </div>
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
  </div>
</body>
</html>
