<!-- kết nối database -->
<?php
class Database{
    private $__severname = "localhost";
    private $__dbname = "duanmau_ph31079";
    private $__username = "root";
    private $__pw = "";

    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=".$this->__severname.";dbname=".$this->__dbname."",$this->__username,$this->__pw);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "erorr connect" . $e->getMessage();
        }
        return $this->conn;
        
    }
}




