<?php
session_start();
 header('location:login_signup.html');
$con = mysqli_connect('localhost','root','*Shaktikc0123');

mysqli_select_db($con,'registration_project');

$name = $_POST['user'];
$pass = $_POST['password'];
$email    = stripslashes($_REQUEST['email']);
$s = "select * from usertable where name='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    echo"Username Already Taken";
}
else{
    $reg= "insert into usertable(name ,email, password) values ('$name' ,'$email', '$pass')";
    mysqli_query($con, $reg);
    echo"Registration Successfully";
    
}
?>