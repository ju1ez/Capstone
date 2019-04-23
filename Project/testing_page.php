<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'utilities/utils.php';

$roadmap_uszd = array(
    array(
		array('course'=>'CS13011', 'name'=>'CSIA: PROCEDURAL PROGRAMMING', 'courseID'=>'4213011', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'),
		array('course'=>'CS13012', 'name'=>'CSIB: OBJECT ORIENTED PROGRAMMING', 'courseID'=>'4213012', 'prereqs' => array(), 'coreqs'=>array('4213011'), 'critical'=>'y', 'requirement'=>'major'),
		array('course'=>'MATH12002', 'name'=>'ANALYTIC GEOMETRY AND CALCULUS I', 'courseID'=>'11412002', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'),
		array('course'=>'KCMP', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KCMP1'), 
		array('course'=>'GE', 'name'=>'General Elective', 'courseID'=>'10', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'GE'),
		array('course'=>'UC10097', 'name'=>'FIRST YEAR EXPERIENCE', 'courseID'=>'16810097', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major')
	),
    array(
		array('course'=>'CS23001', 'name'=>'CSII: DATA STRUCTURES AND ABSTRACTION ', 'courseID'=>'4223001', 'prereqs' => array('4213012'), 'coreqs'=>array('4223022'), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'MATH12003', 'name'=>'ANALYTIC GEOMETRY AND CALCULUS II', 'courseID'=>'11412003', 'prereqs' => array('11412002'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'CS23022', 'name'=>'DISCRETE STRUCTURES FOR CS', 'courseID'=>'4223022', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'KCMP', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KCMP2'), 
	),
    array(
		array('course'=>'CS33211', 'name'=>'OPERATING SYSTEMS', 'courseID'=>'4233211', 'prereqs' => array('4223001'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'CS35101', 'name'=>'COMPUTER ARCHITECTURE', 'courseID'=>'4235101', 'prereqs' => array('4213012'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'MATH22005', 'name'=>'ANALYTIC GEOMETRY AND CALCULUS III', 'courseID'=>'11422005', 'prereqs' => array('11412003'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'FL', 'name'=>'Foreign Language', 'courseID'=>'30', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'FL'), 
	),
    array(
		array('course'=>'CS33007', 'name'=>'INTRODUCTION TO DATABASE SYSTEM DESIGN', 'courseID'=>'4233007', 'prereqs' => array('4223001'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'CS35201', 'name'=>'COMPUTER COMMUNICATION NETWORKS', 'courseID'=>'4235201', 'prereqs' => array('4223001'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'FL', 'name'=>'Foreign Language', 'courseID'=>'30', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'FL'), 
		array('course'=>'KFA', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KFA'), 
	),
    array(
		array('course'=>'CS33901', 'name'=>'SOFTWARE ENGINEERING', 'courseID'=>'4233901', 'prereqs' => array('4223001'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'CS44001', 'name'=>'CS III: PROGRAMMING PATTERNS', 'courseID'=>'4244001', 'prereqs' => array('4223001'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'CS46101', 'name'=>'DESIGN AND ANALYSIS OF ALGORITHMS', 'courseID'=>'4246101', 'prereqs' => array('4223001'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'KHUM', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KHUM'), 
		array('course'=>'KFA or KHUM', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KFAKHUM'), 
	),
    array(
		array('course'=>'CS33101', 'name'=>'STRUCTURE OF PROGRAMMING LANGUAGES', 'courseID'=>'4233101', 'prereqs' => array('4223001'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'CS30000/40000', 'name'=>'CS Upper Elective', 'courseID'=>'4230000', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'UE3'), 
		array('course'=>'CS30000/40000', 'name'=>'CS Upper Elective', 'courseID'=>'4230000', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'UE3'),
		array('course'=>'KSS', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KSS1'), 
		array('course'=>'KBS', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KBS'), 
	),
    array(
		array('course'=>'CS49901', 'name'=>'Capstone', 'courseID'=>'4249901', 'prereqs' => array('4233007', '4233901', '4235201'), 'coreqs'=>array(), 'critical'=>'y', 'requirement'=>'major'), 
		array('course'=>'CS30000/40000', 'name'=>'CS Upper Elective', 'courseID'=>'4230000', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'UE3'), 
		array('course'=>'CS40000', 'name'=>'CS Upper Elective', 'courseID'=>'4230000', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'UE4'), 
		array('course'=>'KSS', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KSS2'), 
		array('course'=>'KLAB', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KLAB'), 
	),
    array(
		array('course'=>'CS40000', 'name'=>'CS Upper Elective', 'courseID'=>'4230000', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'UE4'),
		array('course'=>'CS40000', 'name'=>'CS Upper Elective', 'courseID'=>'4230000', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'UE4'), 
		array('course'=>'ANY', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KANY'), 
		array('course'=>'ANY', 'name'=>'Kent Core', 'courseID'=>'20', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'KANY'), 
		array('course'=>'GE', 'name'=>'General Elective', 'courseID'=>'10', 'prereqs' => array(), 'coreqs'=>array(), 'critical'=>'n', 'requirement'=>'GE'), 
	)
);
$roadmap_szd = serialize($roadmap_uszd);

/**
 * test_roadmaps.data.php includes:
 * $roadmap_uszd	unserialized roadmap
 * $roadmap_szd 	serialized roadmap
 */
//$roadmap_uszd; $roadmap_szd;


// Dummy $_SESSION data
$_LOGGEDIN = true;
$_ID = 24;
$_USERNAME = "agast";
$_PASSWORD = "password";
$_EMAIL = "";
$_PLANS = getAllPlansForUser($_ID);
?>

<!DOCTYPE html>
<html lang="en">
<h1> Utility Test Page </h1>

<?php
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
// Test show plans
echo '<h2>Test utils.php</h2>';
echo '<h3>Test getAllPlansForUser()</h3>';
echo '<h3>-------------------------</h3>';

// Show which plans have saved data
foreach ($_PLANS as $plan_num => $plan) {
	if(isset($plan)) {
		echo "Successfully loaded plan" . $plan_num . "<br/>";
	}else {
		echo "No current save for plan" . $plan_num . "<br/>";
	}
}

/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
// Test save plan through POST
echo '<h3>Test savePlanForUser()</h3>';
echo '<h3>----------------------</h3>';
?>

<h3 class="text-center">Save As..</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group">
		<label>plan1</label>
		<input type="radio" name="save" class="form-control" value="0">
		<br>
		<label>plan2</label>
		<input type="radio" name="save" class="form-control" value="1">
		<br>
		<label>plan3</label>
		<input type="radio" name="save" class="form-control" value="2">
		<br>
	</div>
	<div class="form-group">
		<p><input type="submit" class="btn btn-success pull-right" value="Save Plan"></p>         
	</div>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"])) {
	$result = savePlanForUser($_POST["save"], $roadmap_szd, $_ID);
	if($result > 0) {
		echo 'Save successful for plan ' . $_POST["save"] . '.<br>' . $result . ' rows affected.<br/>';
	} else {
		echo 'No rows changed.<br/>';
	}
	header("Refresh:2");
}
?>

<?php
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
// Test remove plan through POST
echo '<br>';
echo '<h3>Test removePlanForUser()</h3>';
echo '<h3>------------------------</h3>';
?>

<h3 class="text-center">Delete..</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<div class="form-group">
		<label>plan1</label>
		<input type="radio" name="rem" class="form-control" value="0">
		<br>
		<label>plan2</label>
		<input type="radio" name="rem" class="form-control" value="1">
		<br>
		<label>plan3</label>
		<input type="radio" name="rem" class="form-control" value="2">
		<br>
	</div>
	<div class="form-group">
		<p><input type="submit" class="btn btn-success pull-right" value="Delete Plan"></p>         
	</div>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rem"])) {
	$result = removePlanForUser($_POST["rem"], $_ID);
	if($result > 0) {
		echo 'Plan ' . $_POST["rem"] . ' removed successfully.<br>' . $result . ' rows affected.<br/>';
	} else {
		echo "No rows changed.<br/>";
	}
	header("Refresh:2");
}
?>
