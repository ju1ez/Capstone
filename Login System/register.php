<?php require_once "config/register_config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.file.php"?>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
        <div class="myContainerLogin" style="margin-top: 5%;">  
            <div class="row">
                <div class="col-md-12">
                  <p style="font-size: 25pt;"><a href="index.php"><span class="glyphicon glyphicon-chevron-left"></span></a></p>
                  <h2 class="text-center">Sign Up</h2>
                    <form action="confirm.php" method="post">
                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>    
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group">
                         <p>Already have an account? <a href="login.php">Login here</a>.
                         <button type="reset" class="btn btn-info pull-right" value="Reset" style="margin-left: 5pt;">Reset</button>
                         <button type="submit" class="btn btn-success pull-right" value="Login">Register</button></p>            
                        </div>    
                    </form>           
                </div>
            </div>
        </div>
    </div>
</body>
</html>