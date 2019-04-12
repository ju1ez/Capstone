<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "config/session_config.php";
include "config/config.php";
include "config/roadmap_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"?>
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
            <?php include "include/templatetable.php" ?>
          </div>
          <div class="col-sm-1"></div>
        </div>
          <div class="row">
          <div class="col-md-12" id="planOffset">
            <div class="col-md-6" >
              <div class="myContent">
                <form class="myForm" action="plan.php" method="post">
                <?php echo '<input type="hidden" name="roadmap" value='.$encoded=base64_encode(serialize($roadmap)).'>'; ?>
                  <div class="panel-group" id="accordion">
                    <?php include 'include/accordionForm.php'; ?>
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