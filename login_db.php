<?php
include 'common.php';
$email=$_POST['email'];
$pswd=$_POST['password'];
$query_stmt = "SELECT id, email  FROM store.users WHERE email='" .$email. "' AND password ='" .$pswd. "'";
$query_result = mysqli_query($con,$query_stmt);
if(!mysqli_num_rows($query_result)){
    $m = "<b>Sorry! Wrong email or password.</b>";
    header('location:login.php?m='. $m);
}else{
    $row = mysqli_fetch_array($query_result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location:products.php');
}
?>