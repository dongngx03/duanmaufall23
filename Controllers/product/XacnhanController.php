<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối product
     include'Models/ProductModel.php';
     $product = new Product($db);
     // kết nối với comment
     include'Models/CommentModel.php';
     $comment = new Comment($db);
     //kết nối với cart
     include'Models/CartModel.php';
     $cart = new Cart($db);
     // kết nối với order
     include'Models/OrderModel.php';
     $order = new Order($db);
    
     // nếu như người mua hàng bấm mua từ giỏ hàng 
     if(isset($_GET['idsp'])) {
        $product_id = $_GET['idsp'];
     }else{
        // người mua hàng bấm mua sản phẩm từ chi tiết sản phẩm 
        $product_id = $_SESSION['product_id'];
     }

     $data = $product->readProductID($product_id);


     $err = []; // lưu trữ báo lỗi 
     if(isset($_POST['xacnhan'])) {
        $order_tinh = $_POST['order_tinh'];
        $order_huyen = $_POST['order_huyen'];
        $order_xa = $_POST['order_xa'];
        $order_diatrict = $_POST['order_diatrict'];
        $order_quantity = $_POST['order_quantity'];
        $user_id = $_SESSION['user_id'];
        $tt_id = 1;

        if(empty($_POST['order_tinh'])) {
            $err['order_tinh'] = "Vui lòng nhập tỉnh/thành phố của bạn";
        }
        if(empty($_POST['order_huyen'])) {
            $err['order_huyen'] = "Vui lòng nhập huyện/quận của bạn";
        }
        if(empty($_POST['order_xa'])) {
            $err['order_xa'] = "Vui lòng nhập xã/phường của bạn";
        }
        if(empty($_POST['order_diatrict'])) {
            $err['order_diatrict'] = "Vui lòng nhập địa trỉ cụ thể hơn ";
        }

        if(empty($err)) {
            $order->addOrder($order_tinh,$order_huyen,$order_xa,$order_diatrict,$order_quantity,$user_id,$product_id,$tt_id);
            echo "<script>window.location.href='index.php?act=thanhcong'</script>";
        }
        
     }
?>