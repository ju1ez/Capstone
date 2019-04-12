<?php 
require_once "config.php";
function create_plan() {
   try {
         $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "SELECT * FROM templates";
         $result = $pdo->query($sql);
         $result1 = $pdo->query($sql);
         echo '<form action="welcome.php" method="post"> 
                        <div class="form-group">
                          <div class="form-group">
                            <label for="sel1">Degree</label>
                            <select class="form-control" id="sel1">
                              <option selected>Select option...</option>
                              <option>';
         while ($row = $result->fetch()) {
            echo $row["Degree"] . '</option>';
             echo '</select>
                        </div>
                          <div class="form-group">
                            <label for="sel2">Major</label>
                            <select class="form-control" id="sel2">
                              <option selected>Select option...</option>
                              <option>'
          
          .   $row["Major"] . '</option>';

 
         }
        
         echo '</select>
                        </div> 
                        <div class="form-group">
                          <button type="submit" class="btn btn-default pull-right">Submit</button>
                        </div>                       
                    </form>';
         $pdo = null;
   }
   catch (PDOException $e) {
      die( $e->getMessage() );
   }
}
?>