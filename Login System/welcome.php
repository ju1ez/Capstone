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
          <?php include "nav.php" ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            
              <h1>Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, and welcome!</h1>
          
            <div class="row">
              <div class="col-sm-4">test</div>
              <div class="col-sm-4">test</div>
              <div class="col-sm-4">test</div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</body>
</html>
