<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect them to welcome page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: welcome.php");
    exit;
}
?>