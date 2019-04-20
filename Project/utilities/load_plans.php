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
	echo '
			
			<div class="col-sm-4 text-center" id="welcome">
				<button class="btn btn-default" name="plan" value="' . $i . '">
				     <img style ="width: 50px; height: 50px;"src="images/plan' . $i . '.png" alt="' . $plan_name . '" />';
				     
				

    if(isset($_SESSION["plans"][$i]) && $_SESSION["plans"][$i] !== NULL) {
      echo '<p class="text-center">Modify ' . $plan_name .' Plan</p>';
    } else {
      echo '<p class="text-center">Create New ' . $plan_name . ' Plan</p>';
    }
    echo '</button></div>';
}
?>