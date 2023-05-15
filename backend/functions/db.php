<?php
class connectDB
{
    public $conn;
    private $hostName = "localhost";
    private $userName = "ucqb8ncnazxxo";
    private $password = "xn--y3cbblhx6cwgwe.cam";
    private $dbName = "dbbsuyhulcae2x";

    function __construct()
    {
        $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
        $this->conn->set_charset("utf8");
        if (!$this->conn) {
            die("Connection failed" . mysqli_connect_error());
        }
    }
}
