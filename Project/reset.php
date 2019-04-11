<?php require_once "config/reset_config.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"?>
<body>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
        <div class="myContainerLogin" style="margin-top: 5%;">  
            <div class="row">
                <div class="col-md-12">
                    <p style="font-size: 25pt;"><a href="welcome.php"><span class="glyphicon glyphicon-chevron-left"></span></a></p>
                  <h2 class="text-center">Reset Password</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                        <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                            <label>New Password</label>
                            <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                            <span class="help-block"><?php echo $new_password_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group">        
                            <a class="btn btn-info pull-right" href="welcome.php">Cancel</a>
                            <input style= "margin-right: 5pt;" type="submit" class="btn btn-default pull-right" value="Submit">
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>  
</div>
</body>
</html>