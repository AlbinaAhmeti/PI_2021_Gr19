<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbase = "test";


$conn = mysqli_connect($servername, $username, $password, $dbase);


$msgnewcount = $_POST['msgnewcount'];
                        $sql="SELECT * FROM contact LIMIT $msgnewcount";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                        echo "<p>";
                        echo $row['message'];
                        echo "</p>";
                    }
                    }
                    else {
                        echo "there are no messages";
                    }

