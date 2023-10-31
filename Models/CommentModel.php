<?php 
class Comment{
    protected $_conn;
    
    function __construct($db)
    {
        $this->_conn = $db;
    }

    // thêm comment 
    public function addCMT($cmt_text, $user_id, $product_id) {
        $query = "INSERT INTO comments(cmt_text, user_id, product_id)
        VALUE('$cmt_text', '$user_id', '$product_id')";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }

    // lấy thông tin tất cả từ comment 
    public function readAllCmt($product_id) {
        $query = "SELECT users.user_id,user_name,user_img,cmt_date,product_name,cmt_text, comments.cmt_id
                                    FROM users join comments on users.user_id = comments.user_id
                                    join products on comments.product_id = products.product_id
                                    WHERE comments.product_id = '$product_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // đếm xem có bao nhiêu comment trong 1 sản phẩm 
    public function countCmt($product_id) {
        $query = "SELECT COUNT(cmt_id) 
            FROM products join comments 
            on products.product_id = comments.product_id
            WHERE products.product_id = '$product_id';
        ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchALL();
        return $data;
    }

    //đọc comment
    public function readAll() {
        $query = "SELECT users.user_id,user_name,user_img,cmt_date,product_name,cmt_text,products.product_id,cmt_id
        FROM users join comments on users.user_id = comments.user_id
        join products on comments.product_id = products.product_id";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // xóa cmt 
    public function deleteCmt($cmt_id) {
        $query = "DELETE FROM comments WHERE cmt_id = $cmt_id";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }


}