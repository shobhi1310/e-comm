<?php
include 'common.php';
$name = $_POST['name'];
$name = mysqli_real_escape_string($con,$name);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con,$email);

$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];

$address = $_POST['address'];
$address = mysqli_real_escape_string($con,$address);

$query1 = "SELECT * FROM users WHERE email='" .$email. "' ";
$query1_result = mysqli_query($con,$query1);
$num = mysqli_num_rows($query1_result);

if($num>0){
    $m = "<span class='red'>Email already exists</span>";
    header('location:signUp.php?m=' . $m);
}
else{
    $query_stmt = "INSERT INTO store.users (name,email,password,contact,city,address) VALUES ('" .$name. "','" .$email. "','" .$password. "','" .$contact. "','" .$city. "','" .$address. "')";
    $query_result = mysqli_query($con,$query_stmt);
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location:products.php');
}
?>