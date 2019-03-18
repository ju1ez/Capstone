<?php require_once "config/login_config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Graduation, The Fastest Option</title>
  <!-- Favicon -->
  <link href="images/login.png" rel="icon">
  <!-- CSS -->
  <link href="css/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
    <p class="text-center" style="color:Red; font-weight: bold; font-size: 60pt; padding: 0; margin:0;">DEMO</p>
      <div class="myContainerLogin">  
        <div class="row">
            <div class="col-md-12">
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