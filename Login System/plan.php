<?php require_once "config/session_config.php" ?>
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
                <form class="myForm">
                   <div class="form-group">
                     <label>Primary Concentration</label>
                    <select class="form-control">
                    <option selected>Select...</option> 
                      <optgroup label="Concentration">
                        <option>Warning: No course database connected</option>
                      </optgroup>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Desired Kent Core Requirements</label>
                    <select multiple class="form-control"> 
                    <option selected>Select...</option> 
                      <optgroup label="Composition">
                        <option>Warning: No course database connected</option>
                      </optgroup>
                      <optgroup label="Mathmatics">
                          <option>Warning: No course database connected</option>
                      </optgroup>
                      <optgroup label="Humanities and Arts">
                          <option>Warning: No course database connected</option>
                      </optgroup>
                      <optgroup label="Social Sciences">
                          <option>Warning: No course database connected</option>
                      </optgroup>
                      <optgroup label="General Sciences">
                          <option>Warning: No course database connected</option>
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
