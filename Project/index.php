<!DOCTYPE html>
<html lang="en">
<?php session_start(); include "include/head.php"?>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <div class="row">
        <div class="col-md-12"><?php include "include/nav_index.php"?></div>
         <div class="col-md-12">
            <div class="jumbotron" id="jumbo">
              <h1>Welcome!</h1> 
              <p>You have reached the best stop to plan for your graduation!</p> 
            </div>
          </div>
          <div class="col-md-12" id="myDiv">
            <div class="col-sm-3">
              <div class="panel panel-default">
                <div class="panel-heading" id="myPanel_header">
                <a href="http://catalog.kent.edu/" target="_blank"><img id="myPanel_img" class="img-responsive center-block" src="images/catelog.png"></a>      
                <a href="http://catalog.kent.edu/" target="_blank"><p id ="offset" class="text-center">University Catalog</p></a>
               </div>
             </div>
            </div>
            <div class="col-sm-3">
              <div class="panel panel-default">
                <div class="panel-heading" id="myPanel_header">
                <a href="http://catalog.kent.edu/programsaz/" target="_blank"><img id="myPanel_img" class="img-responsive center-block" src="images/prog.png"></a>
                <a href="http://catalog.kent.edu/programsaz/" target="_blank"><p id ="offset" class="text-center">Program Catalog</p></a>
               </div>
             </div>
            </div>
            <div class="col-sm-3">
              <div class="panel panel-default">
                <div class="panel-heading" id="myPanel_header">
                <a href="http://catalog.kent.edu/coursesaz/" target="_blank"><img id="myPanel_img" class="img-responsive center-block" src="images/course.png"></a>      
                <a href="http://catalog.kent.edu/coursesaz/" target="_blank"><p id ="offset" class="text-center">Course Catalog</p></a>
               </div>
             </div>
            </div>
            <div class="col-sm-3">
              <div class="panel panel-default">
                <div class="panel-heading" id="myPanel_header">
                <a href="http://www.kent.edu/calendars/" target="_blank"><img id="myPanel_img" class="img-responsive center-block" src="images/cal.png"></a>      
                <a href="http://www.kent.edu/calendars/" target="_blank"><p id ="offset" class="text-center">Academic Calendar</p></a>
               </div>
             </div>
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
  </div>
</body>
</html>