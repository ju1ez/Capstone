<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'neZ0we4N');
define('DB_NAME', 'Capstone');
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "success"; use to test connection
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>