<?php
function throwException($message="ADNI ESHTE ME I MIRI",$code=null){
    throw new Exception($message,$code);
}
try{
    $s="Registration";

    if (empty($_POST["username"]) or empty($_POST["email"]) or empty($_POST["password"])) {
        exit( "Registration failed due to box empty, fill all the boxes!");
    } else {
        $username =trim($_POST["username"]);
        $email = trim($_POST['email']);
        $password_ =trim($_POST['password']);
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit("Invalid email format!");
    }
    $conn = new mysqli('localhost','root','','FrrokMotion')
    or throwException("error");
    $sql = "SELECT * FROM register WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn,$sql);
    $stmt = $conn->prepare("insert into register(username, password_, email) values(?, ?, ?)");
    if(mysqli_num_rows($result)==0){
    $stmt->bind_param("sss", $username, $password_, $email);
    $execval = $stmt->execute();
    printf("%s SUCCESSFULLY...",$s);
    }
    else{
        printf("%s FAILED, username.$username or email .$email are already used. Try again!",$s);
    }
}
catch(Exception $e){
    echo 'Cought exception :'. $e->getMessage();
    echo 'On line :'. $e->getLine();
    echo 'Stack Trace :';print_r ($e->getTrace());

}
finally{
    $stmt->close();
    $conn->close();
}

// Database connection
//$conn = new mysqli('localhost','root','','FrrokMotion');
//if($conn->connect_error){
//    echo "$conn->connect_error";
//    die("Connection Failed : ". $conn->connect_error);
//} else {
//    $stmt = $conn->prepare("insert into register(username, password_, email) values(?, ?, ?)");
//    $stmt->bind_param("sss", $username, $password_, $email);
////    $execval = $stmt->execute();
//    echo $execval;
//    echo "Registration successfully...";
//    $stmt->close();
//    $conn->close();
//}
?>