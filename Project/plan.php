<?php 
require_once "config/session_config.php";
include "config/config.php";
include "config/roadmap_config.php";
include 'utilities/treeUtils.php';

// if($roadmap !== $_SESSION['modplan']) {
//   echo "<p class='text-center text-warning'>NO</p><br>";

// } else {
//   echo "<p class='text-center text-warning'>YES</p><br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php";?>
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
      <div class="myContainer">
        <!-- Top row (table) -->
        <div class="row">
          <?php include "include/nav_plan.php" ?>
          <h2 style="margin-left: 20pt;">About your plan:</h2>
            <p style="margin: 20pt;">Use this feature to move your courses around. You can push a course to a later semester using the down arrow, and you can move a course back using the up arrow.</p> 
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
               <h2 style="margin-top: 0;">Plan Modification:</h2>
                <p>General Electives and Kent Core classes can be chosen for each semester by using the drop down features of this section. Simply click on a semester to expand it to see your courses. Select the course you want from the dropdown, and then click submit to see how your choices look in the above table and in your roadmap tree.<br><br>
                In order to ensure that you graduate as soon as possible, we have already chosen the best semester to fill your elective requirements.</p>
                <br><br>

                <!-- Save plan form -->
                <h2 style="margin-top: 0;">Save Plan Modifications?</h2>
                <form class="myForm" action="plan.php" method="post">
                  <div class="form-group">
                    <p>Any changes made to your plan are not automatically saved. Please click submit before saving!<br><br></p>
                    <input type="submit" class="btn btn-default" name="save" value="Save Plan">
                    <p><br/></p>
                    <h2 style="margin-top: 0;">Delete Plan?</h2>
                    <p>Deleting a plan is irreversible. Only click if you are sure!<br><br></p>
                    <input type="submit" class="btn btn-default" name="delete" value="Delete Plan">
                    <br>
                  </div>
                </form>
            </div>
            <!-- Visual Tree Representation of Roadmap Plan -->
          </div>      
        </div>
        <div class="row" style="margin-bottom: 3pt;">
          <div class="col-md-12">
            <h4 style="margin:20pt;">Visualize Your Plan</h4>
              <div id="mynetwork">
                <script type="text/javascript">draw();</script>
              </div>
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