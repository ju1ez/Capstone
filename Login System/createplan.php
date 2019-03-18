<?php require_once "config/reset_config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Graduation, The Fastest Option</title>
  <!-- Favicon -->
  <link href="images/icon.png" rel="icon">
  <!-- CSS -->
  <link href="css/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
        <div class="myContainerLogin" style="margin-top: 5%;">  
            <div class="row">
                <div class="col-md-12">
                  <h2 class="text-center">Create Initial Plan</h2>
                    <form action="welcome.php" method="post"> 
                        <div class="form-group">
                          <div class="form-group">
                            <label for="sel1">Degree</label>
                            <select class="form-control" id="sel1">
                              <option selected>Select option...</option>
                              <option>Bachelor of Arts and Science</option>
                              <option>Bachelor of Science</option>
                            </select>
                        </div>
                          <div class="form-group">
                            <label for="sel2">Major</label>
                            <select class="form-control" id="sel2">
                              <option selected>Select option...</option>
                              <option>Computer Science</option>
                            </select>
                        </div> 
                        <div class="form-group">
                          <button type="submit" class="btn btn-default pull-right">Submit</button>
                        </div>                       
                    </form>
                </div>  
            </div>
        </div>
    </div>  
</div>
</body>
</html>