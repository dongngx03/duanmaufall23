<?php 
class Product{
    protected $_conn;
    function __construct($db)
    {
        $this->_conn = $db;
    }
   

    // thêm sản phẩm 
    public function addProduct($product_name,$product_price,$product_img,$product_discount,$product_desc,$product_quantity,$product_brand,$type_id) {
        $query = "INSERT INTO products(product_name,product_price,product_img,product_discount,product_desc,product_quantity,product_brand,type_id)
                  VALUE('$product_name','$product_price','$product_img','$product_discount','$product_desc','$product_quantity','$product_brand','$type_id')
        ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }

    // đọc dữ liệu sản phẩm 
    public function readProduct() {
        $query = "SELECT * FROM products";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();

        $data = $stmt->fetchAll();
        return $data;
    }

    // đọc sản phẩm theo id
    public function readProductID($product_id) {
        $query = "SELECT * FROM products WHERE product_id = '$product_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // xóa sản phẩm theo id 
    public function deleteProduct($product_id) {
        $query = "DELETE FROM products WHERE product_id = '$product_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }

    // lấy những sản phẩm là laptop
    public function readLaptop() {
        $query = "SELECT * FROM products WHERE type_id = 2";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // lấy những sản phẩm là điện thoại 
    
    public function readPhone() {
        $query = "SELECT * FROM products WHERE type_id = 1";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    // đọc sản phẩm theo id
    public function readImgProductID($product_id) {
        $query = "SELECT product_img FROM products WHERE product_id = '$product_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    // cập nhật sản phẩm theo id 
    public function updateProductID($product_id, $product_name,$product_price, $product_img, $product_desc, $product_discount,$product_quantity,$type_id) {
        $query = "UPDATE products SET product_name = '$product_name', product_price = '$product_price', product_img = '$product_img',
                                                    product_desc = '$product_desc', product_discount = '$product_discount',
                                                    product_quantity = '$product_quantity', type_id = $type_id 
                                    WHERE product_id = '$product_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }

    // THỐNG KÊ SẢN PHẨM 
    // LẤY TỔNG  SỐ LƯỢNG THEO SẢN PHẨM , GIÁ CAO NHẤT , GIÁ THẤP NHẤT , GIÁ TỦNG BÌNH thoe tên loại 
    public function thongKe() {
        $query = "SELECT producttypes.type_name, MAX(products.product_price) as max_price,
                                        MIN(products.product_price) as min_price,
                                        AVG(products.product_price) as avg_price,
                                        COUNT(products.product_id) as count_product
            FROM products join producttypes on products.type_id = producttypes.type_id
            GROUP BY producttypes.type_name
        ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // top  sản phẩm có nhiều lượt cho vào giỏ hàng nhát 
    public function countTopCart() {
        $query = "SELECT carts.product_id,product_name,COUNT(*) as count_cart,product_img
                FROM products join carts on products.product_id = carts.product_id
                GROUP BY product_name
                ORDER BY COUNT(*) DESC
                ";
         $stmt = $this->_conn->prepare($query);
         $stmt->execute();
         $data = $stmt->fetchAll();
         return $data;
    }
    // top sản phẩm có nhiều lượt mua nhất 
    public function countBuy() {
        $query = "SELECT COUNT(*) as count_buy, product_name, products.product_id, product_img
                FROM products join orders on products.product_id = orders.product_id 
                group by product_name 
                order by count(*) desc 
        

        ";
         $stmt = $this->_conn->prepare($query);
         $stmt->execute();
         $data = $stmt->fetchAll();
         return $data;
    }
    // top khách hàng có lượng đặt mau nhiều nhất 
    public function countUserBuy() {
        $query = " SELECT COUNT(*) as count_userbuy, users.user_id, user_img, user_name
                FROM users join orders on users.user_id = orders.user_id 
                group by user_name 
                order by count(*) desc 

        ";
         $stmt = $this->_conn->prepare($query);
         $stmt->execute();
         $data = $stmt->fetchAll();
         return $data;
    }
    
}