<?php require_once "config/session_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <div class="row">
          <?php include "include/nav_welcome.php" ?>
        </div>
        <div class="row">
          <div class="col-md-12">
              <br/>
          </div>
          <div class="col-md-12" id="myDiv">
            <form action="plan.php" method="get">
            <?php include "utilities/load_plans.php"; ?>
            </form>
          </div>
          <div class="col-md-12">
            <br/>
          </div>
      </div>      
    </div>
  </div>
</body>
</html>
