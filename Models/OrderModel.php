<?php 
class Order{
    protected $_conn;

    function __construct($db)
    {
        $this->_conn = $db;
    }

    // thêm đơn hàng mới 

    public function addOrder($order_tinh,$order_huyen,$order_xa,$order_diatrict,$order_quantity,$user_id,$product_id,$tt_id) {
        $query = "INSERT INTO orders(order_tinh,order_huyen,order_xa,order_diatrict,order_quantity,user_id,product_id,tt_id)
                VALUE('$order_tinh','$order_huyen','$order_xa','$order_diatrict','$order_quantity','$user_id','$product_id','$tt_id')";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }

    //lấy các đơn hàng đang quá trình chưa được xác nhận + kiểm tra đơn hàng có hàng hay không
    public function checkOrderdxn($user_id) {
        $query = "SELECT * FROM  products join orders on products.product_id = orders.product_id
                                          join users on orders.user_id = users.user_id
         WHERE users.user_id ='$user_id' and tt_id = 1";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->rowCount();
        return $data;
    }
    public function readOrderdxn($user_id) {
        $query = "SELECT * FROM  products join orders on products.product_id = orders.product_id
                                          join users on orders.user_id = users.user_id
         WHERE users.user_id ='$user_id' and tt_id = 1";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

   
    // đổi trạng thái sang 2
    // trạng thái hiện tại : 1 đang chờ xác nhận , 2 hủy , 3 đã chấp nhận(đang giao), 4 thành công
    // hủy đơn hàng 
    public function cancelOrder($order_id) {
        $query = "UPDATE orders SET tt_id = 2 WHERE order_id = '$order_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }
    // chấp nhận đơn hàng 
    public function acceptOrder($order_id) {
        $query = "UPDATE orders SET tt_id = 3 WHERE order_id = '$order_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }

    // lấy các thông tin đơn hàng đã bị hủy 
    public function checkOrderdh($user_id) {
        $query = "SELECT * FROM  products join orders on products.product_id = orders.product_id
                                          join users on orders.user_id = users.user_id
         WHERE users.user_id ='$user_id' and tt_id = 2";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->rowCount();
        return $data;
    }
    public function readOrderdh($user_id) {
        $query = "SELECT * FROM  products join orders on products.product_id = orders.product_id
                                          join users on orders.user_id = users.user_id
         WHERE users.user_id ='$user_id' and tt_id = 2";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // lấy tất cả dữ liệu về đơn hàng 
    
    public function realAllOrder() {
        $query = "SELECT * FROM  products join orders on products.product_id = orders.product_id
                                          join users on orders.user_id = users.user_id";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // chuyển trang thái của đơn hàng 
    public function statusTransition($order_id,$tt_id) {
        $query = "UPDATE orders SET tt_id = '$tt_id' WHERE order_id = '$order_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }

    // hàm lấy thông tin đơn hàng của khách hàng cố đinh và trạng thaiis của nó 
     //lấy các đơn hàng đang quá trình chưa được xác nhận + kiểm tra đơn hàng có hàng hay không
     public function checkOrdercn($user_id) {
        $query = "SELECT * FROM  products join orders on products.product_id = orders.product_id
                                          join users on orders.user_id = users.user_id
         WHERE users.user_id ='$user_id' and tt_id = 3";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->rowCount();
        return $data;
    }
    public function readOrdercn($user_id) {
        $query = "SELECT * FROM  products join orders on products.product_id = orders.product_id
                                          join users on orders.user_id = users.user_id
         WHERE users.user_id ='$user_id' and tt_id = 3";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // đếm xem có bao nhiêu đone hàng đang giao 
    public function countOrder($tt_id) {
        $query = "SELECT COUNT(order_id) as count
                FROM orders 
                WHERE tt_id = '$tt_id'

        ";
         $stmt = $this->_conn->prepare($query);
         $stmt->execute();
         $data = $stmt->fetchAll();
         return $data;
    }
}