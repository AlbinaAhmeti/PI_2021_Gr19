
<?php
include("email.php");
$servername = "localhost";
$username = "root";
$password ="";
$dbase = "test";


$conn = mysqli_connect($servername, $username, $password, $dbase);
$name = $_POST['username'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$message = $_POST['message'];
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into contact(username, email, phone, message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>