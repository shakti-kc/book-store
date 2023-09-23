<?php
session_start();
$con = mysqli_connect('localhost','root','*Shaktikc0123');

mysqli_select_db($con,'registration_project');
$email    = stripslashes($_REQUEST['email']);
$pass = $_POST['password'];

$s = "select * from usertable where email='$email' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
   header('location:home.html');
 }
else{
    header('location:login_signup.html');
}
?>