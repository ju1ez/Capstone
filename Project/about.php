<!DOCTYPE html>
<html lang="en">
<?php session_start(); include "include/head.php";?>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <div class="row">
        <div class="col-md-12"><?php include "include/nav_index.php"?></div>
         <div class="col-md-12">
            <div class="jumbotron" id="jumbo">
              <h1>About Us</h1> 
              <p>This was created by: <span class ="names"> Kaelyn C, Julia E, Andrew G, Cody S, Zach T</span> for <b>CS 49901: Capstone Project</b> at <a href="https://www.kent.edu/">Kent State University</a></p>
              <p><a href="testing_page.php" target="_blank"><p id ="offset" class="">tests</p></a>
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