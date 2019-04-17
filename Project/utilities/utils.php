<?php
include 'config/config.php';

//$gate = new UserTableGateway($dbAdapter);

/**
 * Returns array of plans (roadmaps)
 * @param int $id - user id (found in session)
 * @return array of serialized plans
 */
function getAllPlansForUser($id) {
	global $pdo;
    $plans = array();
	$sql = "SELECT plan1, plan2, plan3 FROM users WHERE id = :id";
	if($stmt = $pdo->prepare($sql)){
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        if($stmt->execute()){
        	$result = $stmt->fetch();
            $plans[] = $result['plan1'];
            $plans[] = $result['plan2'];
            $plans[] = $result['plan3'];
            //print_r($result);
            //echo '<br/>-----------<br/>';
        } 
    }
    // Close statement
    unset($stmt);
    unset($pdo);
	return $plans;
}


function getPlanForUser($plan_num, $id) {
	global $pdo;
	$result;
	$sql = "SELECT :plan_num FROM users WHERE id = :id";
	if($stmt = $pdo->prepare($sql)){
		$stmt->bindParam(":plan_num", $plan_num, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        if($stmt->execute()){
        	$result = $stmt->fetch();
        } 
    }
    // Close statement
    unset($stmt);
    unset($pdo);
	return $result;
}


/**
 * Saves plan (roadmap) for user
 * @param multidimensional array $newPlan
 * @param int $plan - The number of the plan (plan1,2,3)
 * @param int $id - user ID
 * @return int - # of rows modified
 */
function savePlanForUser($plan_num, $new_plan, $id) {
	global $pdo;
    $sql = "UPDATE users SET plan1 = :new_plan WHERE id = :id";

	if($stmt = $pdo->prepare($sql)){
		//$stmt->bindParam(":plan_num", $plan_num, PDO::PARAM_STR);
		$stmt->bindParam(":new_plan", $new_plan);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        if($stmt->execute()){
        	$result = $stmt->rowCount();
        } 
    }
    // Close statement
    unset($stmt);
    unset($pdo);
	return $result;
}


/**
 * Removes (sets NULL) plan for user
 * @param int $plan - The number of the plan (plan1,2,3)
 * @param int $id - user ID
 * @return int - # of rows modified
 */
function removePlanForUser($plan, $id) {
	global $pdo;
	$sql = "SELECT id, username, password FROM users WHERE username = :username";

	return $result;
}


/**
 * Removes all plans for user
 * @param int $id - user ID
 * @return int - # of rows modified
 */
function removeAllPlansForUser($id) {

	$str = "plan";
	$result = 0;
	for($i = 1; $i < 4; $i++) {
		$result += removePlanForUser($str . $i, $id);
	}
	return $result;
}
?>