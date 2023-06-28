<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login_des.php");
    exit;
}

if (isset($_POST['newData'])) {
  $newData = $_POST['newData'];
  $targetElement = $_POST['targetElement'];
  
  // Update the session variable with the new value
  $_SESSION[$targetElement] = $newData;
  
  // Optionally, you can send a response back to the JavaScript code
  $response = "Session variable updated successfully.";
  echo $response;
}
?>