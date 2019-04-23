<?php
// Initialize the session
session_start();
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
// If user is modifying a plan but clicks "plans"
// without saving, scrap current changes
//if($host === 'localhost/capstone/andy_branch/welcome.php' && isset($_SESSION["modplan"])) {
if($host === 'http://capstone1.cs.kent.edu/welcome.php' && isset($_SESSION["modplan"])) {
	unset($_SESSION["modplan"]);
}

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

// had to put save plan in here because i was getting navigation errors
// trying to include utils.php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"])) {
	include 'utilities/utils.php';
	$plan_num = $_SESSION["plan_num"];
	$roadmap_szd = serialize($_SESSION['modplan']);
	$res = savePlanForUser($plan_num, $roadmap_szd, $_SESSION['id']);
	$msg;
	if($res > 0) {
		$msg = 'Plan has been saved';
	} else {
		$msg = 'No changes made to plan';
	}
	unset($_SESSION['plans']);
	unset($_SESSION['modplan']);
	header("location: welcome.php");
}

// delete plan
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
	include 'utilities/utils.php';
	$plan_num = $_SESSION["plan_num"];

	$res = removePlanForUser($plan_num, $_SESSION['id']);

	$msg;
	if($res > 0) {
		$msg = 'Plan has been removed';
	} else {
		$msg = 'No changes made';
	}
	unset($_SESSION['plans']);
	unset($_SESSION['modplan']);
	header("location: welcome.php");
}

?>