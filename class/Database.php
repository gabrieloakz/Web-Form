<?php
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "1234";
    private $database = "web_form";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
