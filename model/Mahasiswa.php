<?php 
require 'config/database.php';

class Mahasiswa {
    private $conn;
    private $db;

    public function __construct() {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
    }

    public function getAll() {
        $sql = "SELECT * FROM mahasiswa ORDER BY id DESC";
        $result = mysqli_query($this->conn, $sql);
        $data = [];

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function getById($id) {
        $sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            return null;
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>
