<?php 
require_once "config/session_config.php";
include "config/config.php";
include "config/roadmap_config.php";
include 'utilities/treeUtils.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"?>
<style type="text/css">
#mynetwork {
  width: 100%;
  border: 2px solid lightgray;
  background-color: #F5F5F5;
}
</style>
<script type="text/javascript" src="js/vis.min.js"></script>
<link href="css/vis.min.css" rel="stylesheet" type="text/css">
<?php include "include/drawtree.php"?>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <!-- Top row (table) -->
        <div class="row">
          <?php include "include/nav_plan.php" ?>
          <h2>About your plan:</h2>
            <p>Use this feature to move your courses around. You can push a course to a later semester using the down arrow, and you can move a course back using the up arrow.</p> 
        </div>
        <div class="row">
          <div class="col-md-12">
            <?php include "include/templatetable.php" ?>
          </div>
        </div>
        <!-- Lower Row (tree) -->
        
        <div class="row">
          <div class="col-md-12" id="planOffset">
            <div class="col-md-6" >
              <div class="myContent">
                <form class="myForm" action="plan.php" method="post">
                <?php echo '<input type="hidden" name="roadmap" value="'.$encoded=base64_encode(serialize($roadmap)).'">'; ?>
                  <div class="panel-group" id="accordion">
                    <?php include 'include/accordionForm.php'; ?>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>
            </div>
            <div class="col-md-6" >
              <div class="myContent">
               <h2>Plan Modification:</h2>
                <p>General Electives and Kent Core classes can be chosen for each semester by using the drop down features of this section. Simply click on a semester to expand it to see your courses. Select the course you want from the dropdown, and then click submit to see how your choices look in the above table and in your roadmap tree.<br><br>
                In order to ensure that you graduate as soon as possible, we have already chosen the best semester to fill your elective requirements.</p>
              </div>
            </div>
            <!-- Visual Tree Representation of Roadmap Plan -->
          </div>
          <h4>Plan Visual:</h4>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div id="mynetwork">
                <script type="text/javascript">draw();</script>
              </div>
            </div>
      </div>
    </div>
  </div>
</body>
</html>