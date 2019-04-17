<nav class="navbar navbar-inverse" id= "noMarg">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span class="navbar-brand">Graduation, The Fastest Option</span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            echo '
              <li><a href="welcome.php"><span class="glyphicon glyphicon-list-alt"></span> Plans</a></li>
              <li><a href="reset.php"><span class="glyphicon glyphicon-cog"></span> Reset Password</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
          } else {
            echo '
              <li><a href="register.php"><span class="glyphicon glyphicon-thumbs-up"></span>  Register</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>