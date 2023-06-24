<?php
include('connection.php');
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$prn = $_POST['prn'];
$college = $_POST['college'];
$year = $_POST['year'];
$branch = $_POST['branch'];
$class = $_POST['class'];
$batch = $_POST['batch'];
$roll_no = $_POST['roll_no'];
$aadhar = $_POST['aadhar'];
$pan = $_POST['pan'];

$check = "select * from user_details where email='$email'";
$result = mysqli_query($con, $check);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count > 0){
    echo "user already exists";
}
else{
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO `form_helper`.`user_details` (`email`, `password`, `name`, `prn_no`, `college`, `year`, `branch`, `class`, `batch`, `roll_no`, `aadhar`, `pan`) VALUES ('$email', '$hash', '$full_name', '$prn', '$college', '$year', '$branch', '$class', '$batch', '$roll_no', '$aadhar', '$pan')";

    if($con->query($sql) == true){
        //echo "Successfully inserted";
        header("location: login_des.php");
    }
    else{
        echo "Problem inserting into database";
    }
}

?>