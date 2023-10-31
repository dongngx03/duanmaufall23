<?php
class Cart{
    protected $_conn;
    function __construct($db)
    {
        $this->_conn = $db;
    }

    // thêm vào giỏ hàng 
    public function addCart($user_id, $product_id) {
        $query = "INSERT INTO carts(user_id, product_id) 
                    VALUE('$user_id', $product_id)";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }
    // đọc hết dữ liệu giỏ hàng bằng cách nối 3 bảng với nhau 
    public function readCart($user_id) {
        $query = "SELECT * 
                    FROM producttypes join products on producttypes.type_id = products.type_id
                                      join carts    on products.product_id = carts.product_id
                                      join users    on carts.user_id = users.user_id
                    WHERE users.user_id = '$user_id' ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // check xem người dùng có đồ gì xong giỏ hàng hay chưa
    public function checkCart($user_id) {
        $query = "SELECT * 
                    FROM producttypes join products on producttypes.type_id = products.type_id
                                      join carts    on products.product_id = carts.product_id
                                      join users    on carts.user_id = users.user_id
                    WHERE users.user_id = '$user_id' ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $check = $stmt->rowCount();
        return $check;
    }

    // đếm xem 1 user có boa nhiều sản phâm đã thêm trong giỏ hàng 
    public function CountCart($user_id) {
        $query = "SELECT COUNT(cart_id) 
                    FROM carts join users on carts.user_id = users.user_id
                    WHERE users.user_id = $user_id";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    // xóa giỏ hàng 
    public function deleteCart($cart_id) {
        $query = "DELETE FROM carts 
                WHERE cart_id = '$cart_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }


}