<?php
// Initialize the session
session_start();
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
// Check if the user is logged in, if not then redirect them to the index page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

// If user is logged in, set plans in session and
// grab any plans from the DB and redirect to welcome.php

if(!isset($_SESSION["plans"])) {
	include 'utilities/utils.php';

	$id = $_SESSION["id"];
	$plans = getAllPlansForUser($id);
	$_SESSION["plans"] = $plans;

    header("location: welcome.php");
    exit;
}
// If user is modifying a plan but clicks "plans"
// without saving, scrap current changes
if($host === 'localhost/capstone/andy_branch/welcome.php' && isset($_SESSION["modplan"])) {
	unset($_SESSION["modplan"]);
}

/**
 * Debugging
 *
if(isset($_SESSION["plans"])) {
	foreach ($_SESSION["plans"] as $plan_num => $plan) {
		if(isset($plan)) {
			echo "successfully loaded " . $plan_num . "<br/>";
			print_r(unserialize($plan));
			echo "<br/><br/>";
		} else {
			echo "No current save for " . $plan_num . "<br/>";
		}
	}
}
//echo "Plans loaded successfully!<br/>";
/**
 * End Debugging
 */
?>