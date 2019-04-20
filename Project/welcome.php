<?php require_once "config/session_config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerWelcome">
        <div class="row">
          <?php include "include/nav_welcome.php" ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form action="plan.php" method="get">
            <?php include "utilities/load_plans.php"; ?>
            </form>
          </div>
      </div>  
      <div class="row">
            <div class="col-md-12">
              <footer class="footer">
               <?php include "include/footer.php"?>
              </footer>
            </div>
        </div>    
    </div>
  </div>
</body>
</html>
