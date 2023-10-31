<?php 
class Producttype{
    protected $_conn;

    function __construct($db)
    {
        $this->_conn = $db;
    }

    // đọc bảng loại 
    public function readType() {
        $query = "SELECT * FROM producttypes";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();

        $data = $stmt->fetchAll();
        return $data;
    }

    
}