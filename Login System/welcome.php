<?php require_once "config/session_config.php" ?>
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
  <link href="css/vis.min.css" rel="stylesheet" type="text/css">
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/vis.min.js"></script>
  <script type="text/javascript" src="js/nodes.js"></script>
</head>
<body id="mybackground" onload="draw();">
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">
        <div class="row">
          <?php include "nav.php" ?>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1>Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, and welcome!</h1>
          </div>
        </div>
          <div class="row">
            <div class="col-md-6">
              <div class="myContent">
                <form class="myForm">
                   <div class="form-group">
                     <label>Primary Concentration</label>
                    <select class="form-control">
                    <option selected>Select...</option> 
                      <optgroup label="Concentration">
                        <option>Warning: No course database connected</option>
                      </optgroup>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Desired Kent Core Requirements</label>
                    <select multiple class="form-control"> 
                    <option selected>Select...</option> 
                      <optgroup label="Composition">
                        <option>Warning: No course database connected</option>
                      </optgroup>
                      <optgroup label="Mathmatics">
                          <option>Warning: No course database connected</option>
                      </optgroup>
                      <optgroup label="Humanities and Arts">
                          <option>Warning: No course database connected</option>
                      </optgroup>
                      <optgroup label="Social Sciences">
                          <option>Warning: No course database connected</option>
                      </optgroup>
                      <optgroup label="General Sciences">
                          <option>Warning: No course database connected</option>
                      </optgroup>
                    </select>
                  </div>
                    <fieldset disabled>
                      <div class="form-group">
                        <label for="disabledTextInput">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                      </div>
                      <div class="form-group">
                        <label for="disabledSelect">Disabled select menu</label>
                        <select id="disabledSelect" class="form-control">
                          <option>Disabled select</option>
                        </select>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Can't check this
                        </label>
                      </div>
                    </fieldset>                 
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">
                        Option one is this and that &mdash; be sure to include why it's great
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that &mdash; be sure to include why it's great
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                      </label>
                    </div>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
              </div>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-default" id="btn-UD" value="Up-Down">Up-Down</button>
                <button type="button" class="btn btn-primary" id="btn-DU" value="Down-Up">Down-Up</button>
                <button type="button" class="btn btn-info" id="btn-LR" value="Left-Right">Left-Right</button>
                <button type="button" class="btn btn-success" id="btn-RL" value="Right-Left">Right-Left</button>
                <input type="hidden" id="direction" value="UD">
            <br /><br />
              <div id="mynetwork">
              </div>
              <p id="selection"></p>
              <script type="text/javascript" src="js/nodeSelect.js"></script>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
