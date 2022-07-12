<?php
class Contact {
    private $username;
    private $email;
    private $phone;
    private $message;

    function __construct($username,$email,$phone,$message){
        $this->username = $username;
        $this->email=$email;
        $this->phone=$phone;
        $this->message=$message;
    }
    function get_username(){
        return $this->username;
    }
    function set_username($username){
        $this->username=$username;
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email=$email;
    }
    function get_phone($phone) {
        $this->phone = $phone;
    }
    function set_phone($phone){
        $this->phone=$phone;
    }
    function get_message($message) {
        $this->message = $message;
    }
    function set_message($message){
        $this->message=$message;
    }
    public function __destruct()
    {
        echo "I'm dead now :(";
    }
}



?>