<?php
session_start();
ob_start();
include 'databaza.php';
include 'register.php';
include 'showregister.php';
$conn = new mysqli("localhost","root","","FrrokMotion");

$username=$_POST['username'];
$password_=$_POST['password'];


$sql = "SELECT * FROM register WHERE username='$username' AND password_='$password_'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $user = new ViewRegister("root","","localhost","FrrokMotion");
    $_SESSION['username'] = $username;
    $user->showAllRegisters();
    $user->logout();
}
else{
    echo  "<script>alert(\"KENI GABUAR USERNAME OSE PASSOWRDIN                                           press back and try again \")</script>";
}


