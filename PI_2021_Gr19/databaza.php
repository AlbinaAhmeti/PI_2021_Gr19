<?php
class dbh{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="FrrokMotion";

        $conn = new mysqli($this->servername="localhost",
        $this->username="root",
        $this->password="",
        $this->dbname="FrrokMotion");
        return $conn;
    }
}
?>