<nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span class="navbar-brand" style="margin-left: 5pt;">Account: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> | Plan Modification</span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right" id="myLink">
        <li><a href="welcome.php"><span class="glyphicon glyphicon-list-alt"></span> Plans</a></li>
        <li><a href="reset.php"><span class="glyphicon glyphicon-cog"></span> Reset Password</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>