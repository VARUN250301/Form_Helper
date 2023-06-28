<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login_des.php");
    exit;
}
?>

<?php 
include('connection.php');
$sql;
$query;
$newData = $_POST['newData'];
$targetElement = $_POST['targetElement'];
$sessionid = $_SESSION['id'];

switch($targetElement){
    case "pan":
        $sql = "UPDATE `user_details` SET `pan` = '$newData' WHERE id = $sessionid";
        break;
    case "aadhar":
        $sql = "UPDATE `user_details` SET `aadhar` = '$newData' WHERE id = $sessionid";
        break;
    case "name":
        $sql = "UPDATE `user_details` SET `name` = '$newData' WHERE id = $sessionid";
        break;
    case "prn_no":
        $sql = "UPDATE `user_details` SET `prn_no` = '$newData' WHERE id = $sessionid";
        break;
    case "roll_no":
        $sql = "UPDATE `user_details` SET `roll_no` = '$newData' WHERE id = $sessionid";
        break;
    case "college":
        $sql = "UPDATE `user_details` SET `college` = '$newData' WHERE id = $sessionid";
        break;
    case "year":
        $sql = "UPDATE `user_details` SET `year` = '$newData' WHERE id = $sessionid";
        break;
    case "branch":
        $sql = "UPDATE `user_details` SET `branch` = '$newData' WHERE id = $sessionid";
        break;
    case "batch":
        $sql = "UPDATE `user_details` SET `batch` = '$newData' WHERE id = $sessionid";
        break;
    case "class":
        $sql = "UPDATE `user_details` SET `class` = '$newData' WHERE id = $sessionid";
        break;
    case "email":
        $sql = "UPDATE `user_details` SET `email` = '$newData' WHERE id = $sessionid";
        break;
}

$query = mysqli_query($con, $sql);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',   
    );

    echo json_encode($data);
    
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
}
?>