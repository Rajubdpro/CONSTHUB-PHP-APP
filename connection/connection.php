<?php
/**
 * START DATABASE CLASS
 */
class Database{
    private $servername = "localhost";
    private $dbusername = "root";
    private $dbpassword = "";
    private $dbname = "consthub_php_app";
    public $conn;

    public function __construct()
    {
        session_start();
        $this->conn = new mysqli($this->servername, $this->dbusername, $this->dbpassword, $this->dbname);
        if($this->conn->connect_error){
            echo"Connection faild";
        }
    }
}

?>

