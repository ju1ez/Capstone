<?php require_once "config/login_config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/header.file.php"?>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
    <!--<p class="text-center" style="color:Red; font-weight: bold; font-size: 60pt; padding: 0; margin:0;">DEMO</p>-->
      <div class="myContainerLogin">  
        <div class="row">
            <div class="col-md-12">
              <p style="font-size: 25pt;"><a href="index.php"><span class="glyphicon glyphicon-chevron-left"></span></a></p>
              <div id="loginForm">
                <figure id ="loginImg"><img href="images/lock.png" src="images/lock.png" alt="Lock Icon" titlte = "Lock Icon"/></figure>
                <h2 class="text-center">Login</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" autocomplete="username" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>    
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="current-password">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                    <p>Don't have an account? <a href="register.php">Sign up now</a>.
                       <button type="reset" class="btn btn-info pull-right" value="Reset" style="margin-left: 5pt;">Reset</button>
                    <input type="submit" class="btn btn-success pull-right" value="Login"></p>         
                    </div>               
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>