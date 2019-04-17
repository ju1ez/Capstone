<?php

// Generate HTML for welcome.php
for($i = 0; $i < 3; $i++) {

	$plan_name = "Critical";
	if($i === 1) {
		$plan_name = "Alternative";
	} 
	if($i === 2) {
		$plan_name = "Supplemental";
	}
	//<div class="col-sm-1"></div>
	echo '
			
			<div class="col-sm-3">
				<button class="btn btn-default img-responsive center-block"  name="plan" value="' . $i . '">
				     <img src="images/plan' . $i . '.png" alt="' . $plan_name . '" />' 
				     . '<h4 class="text-center" id ="offset">' . $plan_name . ' Plan</h4>
				
    	';

    if(isset($_SESSION["plans"][$i]) && $_SESSION["plans"][$i] !== NULL) {
      echo '<p id ="offset" class="text-center">Modify Existing ' . $plan_name .' Plan</p>';
    } else {
      echo '<p id ="offset" class="text-center">Create New ' . $plan_name . ' Plan</p>';
    }
    echo '</button></div><div class="col-sm-1"></div>';
}
?>