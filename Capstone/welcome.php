<?php require_once "config/session_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.file.php"?>
<body id="mybackground">
<script type="text/javascript" src="js/vis.min.js"></script>
<script type="text/javascript" src="js/nodes.js"></script>
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <div class="row">
          <?php include "nav.php" ?>
        </div>
        <div class="row">
          <div class="col-md-12">
              <h1></h1>
            </div>
          <div class="col-md-12" id="myDiv">
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
              <div class="panel panel-default">
                <div class="panel-heading" id="myPanel_header">
                <a href="plan.php"><img id="myPanel_img" class="img-responsive center-block" src="images/crit.png"></a>
                <a href="plan.php"><p id ="offset" class="text-center">Critical Plan</p></a>
               </div>
             </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
              <div class="panel panel-default">
                <div class="panel-heading" id="myPanel_header">
                <a href="plan.php"><img id="myPanel_img" class="img-responsive center-block" src="images/alt.png"></a>      
                <a href="plan.php"><p id ="offset" class="text-center">Alternative Plan</p></a>
               </div>
             </div>
            </div>
            <div class="col-sm-3">
              <div class="panel panel-default">
                <div class="panel-heading" id="myPanel_header">
                <a href="plan.php"><img id="myPanel_img" class="img-responsive center-block" src="images/supp.png"></a>      
                <a href="plan.php"><p id ="offset" class="text-center">Supplemental Plan</p></a>
               </div>
             </div>
            </div>
            <div class="col-sm-1"></div>
          </div>
      </div>      
    </div>
  </div>
</body>
</html>
