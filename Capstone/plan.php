<?php include "config/config.php";
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
            <div class="col-md-6">
              <div class="myContent">
                <form class="myForm" action="get">
                   <div class="form-group">
                     <label>Critical List</label>
                      <select multiple name ="cour" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="Critical Course List">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM courses';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['cour']) && $row['CourseID'] == $_GET['cour']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['CourseTitle'];
                                    echo ' (' . $row['CourseID'] . ')';
                                   echo '</option>';
                                 } ?>                  
                          </option>
                        </optgroup>
                      </select>
                   </div>
                   <div class="form-group">
                     <label>Prerequisite List</label>
                      <select multiple name ="prer" class="form-control">
                        <option selected>Select...</option> 
                          <optgroup label="Prerequisite List">
                            <option>
                              <?php
                                $sql = 'SELECT * FROM prereqs';
                                $result = $pdo->query($sql);
                                while ($row = $result->fetch()) {         
                                   echo '<option value="' . $row['CourseID'] . '"';
                                   if (isset($_GET['prer']) && $row['CourseID'] == $_GET['prer']) 
                                      echo ' selected ';
                                   echo '>';
                                   echo $row['PrereqID'];
                                   echo ' (Course: ' . $row['CourseID'] . ')';
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
</body>
</html>
