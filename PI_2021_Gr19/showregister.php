<?php
class ViewRegister extends Register{
    public function showAllRegisters(){
        echo "<script>alert(\"You have loged in with : ".$_POST['username']."\")</script>";
        echo "<h1 style=\"color:red;\"> Welcome : ". $_SESSION['username']."</h1>";
    }

    public function logout(){
       
        echo "<button style='padding:10px; border-radius:10px; background-color: lightblue;'><a href='Home.php'>Logout </a></button>";
        session_destroy();
    }

}