<?php
class connectDB
{
    public $conn;
    private $hostName = "localhost";
    private $userName = "uwdijqhctvmlz";
    private $password = "xn--12c9dast7db4m.live";
    private $dbName = "dbbkziamrs6fd1";

    function __construct()
    {
        $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
        $this->conn->set_charset("utf8");
        if (!$this->conn) {
            die("Connection failed" . mysqli_connect_error());
        }
    }
}
