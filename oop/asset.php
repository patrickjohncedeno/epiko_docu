<?php
require_once 'dbconnect.php';

class Asset {
    private $conn;
    private $table_name = "assets";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->query($query);
        return $result;
    }
}
?>
