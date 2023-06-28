<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$login = false;
include "connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
$query= "Select * From user_details Where email='$email'";

$result=mysqli_query($con,$query);





// if(mysqli_num_rows($result)==0){
//     header("location: login_des.php");
    
//     die();
// }

if(empty($email) and empty($password)){
    header("Location: login_des.php ? error=E-Mail is required");
    die();
}
elseif(!empty($email) and empty($password)){
    header("Location: login_des.php ? errorP=Password is required");
    die();
}

if(mysqli_num_rows($result)==1 and !empty($password)){
    // $test = mysqli_num_rows($result);
    // echo $test;
    // echo $test;
    $row=mysqli_fetch_assoc($result);
    
    $validpassword = password_verify($password,$row['password']);
    
    if($validpassword){
        
        //echo "succcessfully loggedin";
      
        $login = true;

        //date time updation
        $date_time = "update user_details set last_login = now() where email='$email'";
        $abhi = mysqli_query($con, $date_time);

        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['prn_no'] = $row['prn_no'];
        $_SESSION['college'] = $row['college'];
        $_SESSION['year'] = $row['year'];
        $_SESSION['branch'] = $row['branch'];
        $_SESSION['class'] = $row['class'];
        $_SESSION['batch'] = $row['batch'];
        $_SESSION['roll_no'] = $row['roll_no'];
        $_SESSION['aadhar'] = $row['aadhar'];
        $_SESSION['pan'] = $row['pan'];
        $_SESSION['id'] = $row['id'];
        
        header("location: index.php");
        
    }else{
       
        // echo "invalid password";
        header("Location: login_des.php ? errorP=Invalid Password");
        die();
    }
}else{
    // echo "User Not Found";
    header("Location: login_des.php ? errorUnf=User Not Found");
}

?>