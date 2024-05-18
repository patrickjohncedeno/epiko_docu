<?php
require_once 'dbconnect.php';

class Developer {
    private $conn;
    private $table_name = "developer";

    public $id;
    public $name;
    public $bio;
    public $image;

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
