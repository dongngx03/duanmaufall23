<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối product
     include'Models/ProductModel.php';
     $product = new Product($db);
     //kết nối với cart
     include'Models/CartModel.php';
     $cart = new Cart($db);

     // đọc dữ liệu 
     $data = $product->readProduct();

     // đi đến trang chi tiết sản phẩm 
     if(isset($_GET['id'])) {
          $_SESSION['product_id'] = $_GET['id'];
          echo '<script>window.location.href = "index.php?act=chitietsanpham";</script>';
     }
     // đọc sản phẩm là laptop
     $laptop = $product->readLaptop();
     $phone = $product->readPhone();

     // thêm vào giỏ hàng 
     if(isset($_GET['addcart'])) {
         if(!empty($_SESSION['user_id'])) {
               $product_id = $_GET['addcart'];
               $cart->addCart($_SESSION['user_id'], $product_id);
               echo '<script>hienthanhcong();</script>';
         }else{
               echo '<script>window.location.href ="index.php?act=dangnhap";</script>';
         }
     }

     // đếm xem cáo bao nhiêu sản phẩm có trong cart cảu người dùng
     //check trước xem nguwof dùng tồn tại không
     if(!empty($_SESSION['user_id'])) {
            $countCart = $cart->CountCart($_SESSION['user_id']);
            foreach($countCart as $value) {
                  $_SESSION['countCart'] = $value['COUNT(cart_id)'];
            }
     }else{
      $_SESSION['countCart'] = '0';
     }      

?>