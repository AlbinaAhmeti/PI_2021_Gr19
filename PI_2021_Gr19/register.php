<?php
class Register extends dbh{

    protected function getAllRegister(){
        $sql = "SELECT username FROM register";
        $result = $this->connect()->query($sql);
        $numRows=$result->num_rows;
        if($numRows>0){
            while($row = $result->fetch_assoc()){
                $data[]=$row;
            }
            return $data;
        }
    }

    function __construct($username,$password,$servername,$dbname){
       $this->username = $username;
       $this->password=$password;
       $this->servername=$servername;
       $this->dbname=$dbname;
    }

    function get_username(){
        return $this->username;
    }
    function set_username($username){
        $this->username=$username;
    }
    function get_password($password) {
        $this->password = $password;
    }
    function set_password($password){
        $this->password=$password;
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email=$email;
    }
    //public function __destruct()
    //{
    //    echo "I'm dead now :(";
    //}

}



?>