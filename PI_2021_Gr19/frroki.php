<?php
$server = "localhost" ;
$username = "root" ;
$password = "";
$dbname ="FrrokMotion";

// Database connection
$conn = mysqli_connect($server, $username ,$password,$dbname);
if(isset($_POST['submit'])){

    if(!empty($_POST['emri'])&&!empty($_POST['email'])&&!empty($_POST['password_'])){
        $emri=$_POST['name'];
        $password_=$_POST['password_'];
        $email=$_POST['email'];

        $query = "insert into register(emri,password_,email) values('$emri','$password_','$email')";

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if($run){
            echo"Succes";
        }
        else {
            echo"Fail";
        }
    }
    else{
        echo"Krejt duhet mu plotsu";
    }
}

?>