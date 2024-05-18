<?php
class Database {
    private $host = "localhost";
    private $db_name = "epiko";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

            // Check for connection error
            if ($this->conn->connect_error) {
                throw new Exception("Connection error: " . $this->conn->connect_error);
            }
            
            // Set character set to utf8
            $this->conn->set_charset("utf8");
        } catch(Exception $exception) {
            echo $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
