<?php
require_once 'dbconnect.php';

class Character {
    private $conn;
    private $table_name = "characters";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->query($query);
        return $stmt;
    }
}
?>