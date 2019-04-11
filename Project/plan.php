<?php include "config/config.php";
include "config/roadmap_config.php";
require_once "config/session_config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/header.file.php"?>
<body id="mybackground" onload="draw();">
<script type="text/javascript" src="js/vis.min.js"></script>
<script type="text/javascript" src="js/nodes.js"></script>
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <div class="row">
          <?php include "include/nav_plan.php" ?>
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
                   <!--add form drop downs here -->
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="myPanel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse1">Semester One</a></h4>
                </div>
                <div class="panel-collapse collapse" id="collapse1">
                  <div class="panel-body">
                  <?php include 'include/dropdowns.php'; ?>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="myPanel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse2">Semester Two</a></h4>
                </div>
                <div class="panel-collapse collapse" id="collapse2">
                  <div class="panel-body">
                    <?php include 'include/dropdowns.php'; ?>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="myPanel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse3">Semester Three</a></h4>
                </div>
                <div class="panel-collapse collapse" id="collapse3">
                  <div class="panel-body">
                    <?php include 'include/dropdowns.php'; ?>
                  </div>
                </div>
              </div>
            </div>
                    
                 </form> <!-- end form -->
                  </div>

                  </div>         
            <div class="col-md-6">

                <button type="button" class="btn btn-default" id="btn-UD" value="Up-Down">Up-Down</button>
                <button type="button" class="btn btn-primary" id="btn-DU" value="Down-Up">Down-Up</button>
                <button type="button" class="btn btn-info" id="btn-LR" value="Left-Right">Left-Right</button>
                <button type="button" class="btn btn-success" id="btn-RL" value="Right-Left">Right-Left</button>
                <input type="hidden" id="direction" value="UD">
            <br /><br />
              <div id="mynetwork" class="fullScreenModal">
              </div>
              
              <script type="text/javascript" src="js/nodeSelect.js"></script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
