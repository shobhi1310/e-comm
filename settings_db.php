<?php
include 'common.php';

$old_pswd = $_POST['oldpswd'];
$new_pswd = $_POST['newpswd'];
$rpswd = $_POST['rpswd'];
$query_stmt = "SELECT email, password FROM users WHERE email='" .$_SESSION['email']. "' ";
$query_result = mysqli_query($con,$query_stmt);
$row = mysqli_fetch_array($query_result);

$originalpswd = $row['password'];

if($new_pswd!=$rpswd){

}else{
    if($old_pswd==$originalpswd){
        if($new_pswd!=$rpswd){
            header('location:settings.php?error=Please retype new password correctly!');
        }
        else{
            $query = "UPDATE users SET password='" .$new_pswd. "' WHERE email='" .$_SESSION['email']. "' ";
            mysqli_query($con,$query);
            // echo "<script type='text/javascript'>alert('Password successfully updated');</script>";
            header('location:settings.php?error=Password succefully updated');
        }
    }
    else{
        header('location:settings.php?error=Wrong Password!');    
    }
}
?>